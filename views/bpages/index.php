<?php
/**
 * Purpose: Provides the pages library window with rich filtering.
 * Usage: Loaded from the B Pages desktop so designers can browse sample marketing pages.
 */
CI()->load->helper(['direct']);
mwSkin()->loadSheet('', 'mw.windows');
mwSkin()->loadSheet('', 'mw.forms');

$pagesCatalog = [
    [
        'group' => 'Marketing',
        'items' => [
            [
                'id' => 'page-home',
                'title' => 'Homepage – Spring Campaign',
                'description' => 'Hero layout with three promotional blocks and CTA banner.',
                'status' => 'published',
                'owner' => 'John Lee',
                'updated' => '2024-05-28',
                'type' => 'Landing',
                'metrics' => ['Views' => '18.2K', 'Conversions' => '942'],
            ],
            [
                'id' => 'page-product',
                'title' => 'Product Detail – Aurora Lamp',
                'description' => 'Story-driven product page with testimonials and feature grid.',
                'status' => 'draft',
                'owner' => 'Alice Moore',
                'updated' => '2024-05-17',
                'type' => 'Product',
                'metrics' => ['Views' => '6.1K', 'Leads' => '318'],
            ],
            [
                'id' => 'page-webinar',
                'title' => 'Webinar Signup – Design Systems',
                'description' => 'Registration flow with spotlight speakers and reminder automation.',
                'status' => 'scheduled',
                'owner' => 'Ryan Chen',
                'updated' => '2024-06-02',
                'type' => 'Event',
                'metrics' => ['Signups' => '412', 'Reminders' => '318'],
            ],
        ],
    ],
    [
        'group' => 'Editorial',
        'items' => [
            [
                'id' => 'page-insights',
                'title' => 'Insights Hub – Q2 Playbook',
                'description' => 'Magazine-inspired hub with curated navigation and author pods.',
                'status' => 'published',
                'owner' => 'Alice Moore',
                'updated' => '2024-05-09',
                'type' => 'Content',
                'metrics' => ['Reads' => '12.5K', 'Shares' => '1.3K'],
            ],
            [
                'id' => 'page-updates',
                'title' => 'Product Updates – May Highlights',
                'description' => 'Changelog template with component badges and release filters.',
                'status' => 'unpublished',
                'owner' => 'John Lee',
                'updated' => '2024-05-30',
                'type' => 'Docs',
                'metrics' => ['Drafts' => '3', 'Approvals' => 'Awaiting'],
            ],
        ],
    ],
    [
        'group' => 'Support',
        'items' => [
            [
                'id' => 'page-help',
                'title' => 'Help Center – Getting Started',
                'description' => 'Guided navigation with contact escalation and video modules.',
                'status' => 'published',
                'owner' => 'Ryan Chen',
                'updated' => '2024-04-25',
                'type' => 'Support',
                'metrics' => ['Helpful' => '92%', 'Tickets' => 'Down 8%'],
            ],
            [
                'id' => 'page-community',
                'title' => 'Community Programs – Beta Cohort',
                'description' => 'Application process with milestone tracker and automation alerts.',
                'status' => 'trash',
                'owner' => 'John Lee',
                'updated' => '2024-03-18',
                'type' => 'Community',
                'metrics' => ['Applicants' => '138', 'Restores' => '2'],
            ],
        ],
    ],
];

$statusLabels = [
    'published' => 'Published',
    'draft' => 'Draft',
    'scheduled' => 'Scheduled',
    'unpublished' => 'Unpublished',
    'trash' => 'Trash',
];

$types = [];
foreach ($pagesCatalog as $group) {
    foreach ($group['items'] as $page) {
        $types[] = $page['type'];
    }
}
$types = array_values(array_unique($types));
sort($types);

$totalPages = 0;
foreach ($pagesCatalog as $group) {
    $totalPages += count($group['items']);
}
?>

<div class="winHeader">Pages Library</div>

<div class="winContainer" style="width: 1040px;">
        <div class="winContent">
                <div id="mwPagesFilter" class="pages-filter-bar">
                        <div class="filter-field search">
                                <label for="pagesSearch">Search</label>
                                <input id="pagesSearch" type="search" data-filter="search" placeholder="Search by title, owner, or description…" />
                        </div>
                        <div class="filter-field select">
                                <label for="pagesStatus">Status</label>
                                <select id="pagesStatus" data-filter="status">
                                        <option value="">All statuses</option>
<?php foreach ($statusLabels as $value => $label): ?>
                                        <option value="<?=$value?>"><?=$label?></option>
<?php endforeach; ?>
                                </select>
                        </div>
                        <div class="filter-field select">
                                <label for="pagesType">Type</label>
                                <select id="pagesType" data-filter="type">
                                        <option value="">All types</option>
<?php foreach ($types as $type): ?>
                                        <option value="<?=strtolower($type)?>"><?=$type?></option>
<?php endforeach; ?>
                                </select>
                        </div>
                        <div class="filter-meta">
                                <span data-pages-count><?=$totalPages?></span>
                                <span class="label">pages</span>
                        </div>
                </div>

                <ul id="mwPagesIndex" class="mwIndexTable pages-index">
                        <li class="head">
                                <dl>
                                        <dd class="handler nestable"></dd>
                                        <dd class="handler" data-sort="custom"></dd>
                                        <dt data-sort="title">Page</dt>
                                        <dd class="small">Status</dd>
                                        <dd class="small">Owner</dd>
                                        <dd class="small">Updated</dd>
                                        <dd class="small">Highlights</dd>
                                </dl>
                        </li>
<?php foreach ($pagesCatalog as $group): ?>
                        <li class="group">
                                <dl>
                                        <dd class="handler"></dd>
                                        <dt><?=$group['group']?></dt>
                                </dl>
                        </li>
<?php foreach ($group['items'] as $page):
        $status = $page['status'];
        $type = strtolower($page['type']);
        $searchTokens = strtolower($page['title'] . ' ' . $page['description'] . ' ' . $page['owner'] . ' ' . $page['type']);
?>
                        <li data-page="<?=$page['id']?>" data-status="<?=$status?>" data-type="<?=$type?>" data-search="<?=$searchTokens?>" class="no-children collapsed">
                                <dl>
                                        <dd class="handler nestable collapsed"></dd>
                                        <dd class="handler sortable"></dd>
                                        <dt>
                                                <a href="#" class="pages-link" data-preview="<?=$page['id']?>">
                                                        <span class="title"><?=$page['title']?></span>
                                                        <span class="description"><?=$page['description']?></span>
                                                        <span class="type-tag"><?=$page['type']?></span>
                                                </a>
                                        </dt>
                                        <dd class="small">
                                                <span class="status-pill status-<?=$status?>"><?=$statusLabels[$status] ?? ucfirst($status)?></span>
                                        </dd>
                                        <dd class="small">
                                                <span class="owner"><?=$page['owner']?></span>
                                        </dd>
                                        <dd class="small">
                                                <span class="updated"><?=$page['updated']?></span>
                                        </dd>
                                        <dd class="small">
                                                <div class="metrics">
<?php foreach ($page['metrics'] as $label => $value): ?>
                                                        <span><strong><?=$label?>:</strong> <?=$value?></span>
<?php endforeach; ?>
                                                </div>
                                        </dd>
                                </dl>
                        </li>
<?php endforeach; ?>
<?php endforeach; ?>
                </ul>
        </div>
</div>

<style type="text/css">
.pages-filter-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: flex-end;
        margin-bottom: 16px;
}

.pages-filter-bar .filter-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
}

.pages-filter-bar label {
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #6b7280;
}

.pages-filter-bar input,
.pages-filter-bar select {
        border-radius: 6px;
        border: 1px solid #d1d5db;
        padding: 8px 12px;
        font-size: 13px;
        min-width: 220px;
}

.pages-filter-bar .filter-field.search {
        flex: 1 1 280px;
}

.pages-filter-bar .filter-meta {
        display: inline-flex;
        align-items: baseline;
        gap: 4px;
        margin-left: auto;
        font-size: 13px;
        color: #4b5563;
}

.pages-filter-bar .filter-meta span:first-child {
        font-size: 20px;
        font-weight: 700;
        color: #111827;
}

.pages-index .pages-link {
        display: flex;
        flex-direction: column;
        gap: 4px;
        color: inherit;
        text-decoration: none;
}

.pages-index .pages-link:hover .title {
        color: #2563eb;
}

.pages-index .title {
        font-weight: 600;
}

.pages-index .description {
        font-size: 12px;
        color: #6b7280;
}

.pages-index .type-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        background: #eef2ff;
        color: #4338ca;
        border-radius: 999px;
        padding: 2px 8px;
        width: fit-content;
}

.status-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 8px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        text-transform: none;
}

.status-pill.status-published {
        background: #dcfce7;
        color: #166534;
}

.status-pill.status-draft {
        background: #fef3c7;
        color: #92400e;
}

.status-pill.status-scheduled {
        background: #fee2e2;
        color: #b91c1c;
}

.status-pill.status-unpublished {
        background: #e0e7ff;
        color: #4338ca;
}

.status-pill.status-trash {
        background: #f3f4f6;
        color: #4b5563;
}

.pages-index .metrics {
        display: flex;
        flex-wrap: wrap;
        gap: 6px 12px;
        font-size: 12px;
        color: #374151;
}

.pages-index .metrics strong {
        font-weight: 600;
        color: #111827;
}

.pages-index li.group {
        background: #f3f4f6;
        font-weight: 600;
        color: #1f2937;
}

.pages-index li.group dt {
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: 11px;
}

.pages-index li[data-page] {
        border-left: 3px solid transparent;
        transition: border-color 0.2s ease, background 0.2s ease;
}

.pages-index li[data-page]:hover {
        border-left-color: #2563eb;
        background: rgba(37, 99, 235, 0.05);
}
</style>

<script type="text/javascript">
jQuery(function ($) {
        const $rows = $('#mwPagesIndex').find('li[data-page]');
        const $groups = $('#mwPagesIndex').find('li.group');
        const $filters = $('#mwPagesFilter');
        const $count = $('[data-pages-count]');

        function applyFilters() {
                const search = $.trim($filters.find('[data-filter="search"]').val() || '').toLowerCase();
                const status = $.trim($filters.find('[data-filter="status"]').val() || '');
                const type = $.trim($filters.find('[data-filter="type"]').val() || '');
                let visible = 0;

                $rows.each(function () {
                        const $row = $(this);
                        const rowStatus = $row.data('status');
                        const rowType = $row.data('type');
                        const haystack = String($row.data('search'));

                        const matchesSearch = !search || haystack.indexOf(search) !== -1;
                        const matchesStatus = !status || rowStatus === status;
                        const matchesType = !type || rowType === type;
                        const show = matchesSearch && matchesStatus && matchesType;

                        $row.toggle(show);
                        if (show) {
                                visible++;
                        }
                });

                $groups.each(function () {
                        const $group = $(this);
                        const $groupItems = $group.nextUntil('li.group');
                        const hasVisible = $groupItems.filter(':visible[data-page]').length > 0;
                        $group.toggle(hasVisible);
                });

                $count.text(visible);
        }

        $filters.on('input change', 'input, select', applyFilters);

        $('#mwPagesIndex').on('click', '[data-preview]', function (event) {
                        event.preventDefault();
                        const target = $(this).data('preview');
                        if (!target) {
                                return;
                        }

                        try {
                                mwWindow(target).show();
                        } catch (error) {
                                console.warn('Preview window not available:', target, error);
                        }
        });

        applyFilters();
});
</script>
