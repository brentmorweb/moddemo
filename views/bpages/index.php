<?php
/**
 * Purpose: Renders the Pages manager prototype directly on the desktop instead of inside a modal window.
 * Usage: Loaded by the Skins controller when browsing the "Pages" demo section.
 */

$filters = [
        ['label' => 'Published',     'count' => 12, 'active' => true],
        ['label' => 'Unpublished',   'count' => 4,  'active' => false],
        ['label' => 'Drafts',        'count' => 8,  'active' => false],
        ['label' => 'Scheduled',     'count' => 2,  'active' => false],
        ['label' => 'Trash',         'count' => 1,  'active' => false],
];

$chips = [
        ['label' => 'Landing pages',         'color' => 'blue'],
        ['label' => 'Reports',               'color' => 'violet'],
        ['label' => 'Campaigns',             'color' => 'pink'],
        ['label' => 'Programs',              'color' => 'emerald'],
        ['label' => 'Draft review pending',  'color' => 'amber'],
];

$pages = [
        [
                'title'         => 'Home',
                'status'        => 'Published',
                'statusClass'   => 'published',
                'views'         => '12.8k views',
                'type'          => 'Landing',
                'typeColor'     => 'blue',
                'author'        => 'You',
                'reports'       => 2,
                'created'       => 'Nov 18, 2024',
                'modified'      => 'Jul 02, 2025',
                'cta'           => true,
        ],
        [
                'title'         => 'Annual reports',
                'status'        => 'Published',
                'statusClass'   => 'published',
                'views'         => '4.2k views',
                'type'          => 'Report',
                'typeColor'     => 'violet',
                'author'        => 'Casey',
                'reports'       => 1,
                'created'       => 'Mar 04, 2025',
                'modified'      => 'Jun 12, 2025',
        ],
        [
                'title'         => 'Campaign results',
                'status'        => 'Scheduled',
                'statusClass'   => 'scheduled',
                'views'         => '980 views',
                'type'          => 'Campaign',
                'typeColor'     => 'pink',
                'author'        => 'Leslie',
                'reports'       => 0,
                'created'       => 'May 18, 2025',
                'modified'      => 'Jun 21, 2025',
        ],
        [
                'title'         => 'Our History',
                'status'        => 'Published',
                'statusClass'   => 'published',
                'views'         => '15.2k views',
                'type'          => 'Story',
                'typeColor'     => 'slate',
                'author'        => 'You',
                'reports'       => 3,
                'created'       => 'Dec 03, 2024',
                'modified'      => 'Jul 05, 2025',
        ],
        [
                'title'         => 'Program A',
                'status'        => 'Draft',
                'statusClass'   => 'draft',
                'views'         => '540 downloads',
                'type'          => 'Program',
                'typeColor'     => 'emerald',
                'author'        => 'Amari',
                'reports'       => 0,
                'created'       => 'Apr 29, 2025',
                'modified'      => 'Jul 05, 2025',
        ],
        [
                'title'         => 'Program B',
                'status'        => 'Published',
                'statusClass'   => 'published',
                'views'         => '530 downloads',
                'type'          => 'Program',
                'typeColor'     => 'emerald',
                'author'        => 'Amari',
                'reports'       => 1,
                'created'       => 'Apr 29, 2025',
                'modified'      => 'Jul 05, 2025',
        ],
        [
                'title'         => 'Volunteer signup',
                'status'        => 'Draft',
                'statusClass'   => 'draft',
                'views'         => '872 views',
                'type'          => 'Campaign',
                'typeColor'     => 'pink',
                'author'        => 'You',
                'reports'       => 0,
                'created'       => 'Jun 03, 2025',
                'modified'      => 'Jul 07, 2025',
        ],
        [
                'title'         => 'Press release',
                'status'        => 'Published',
                'statusClass'   => 'published',
                'views'         => '572.4k views',
                'type'          => 'Campaign',
                'typeColor'     => 'pink',
                'author'        => 'You',
                'reports'       => 0,
                'created'       => 'Jan 16, 2025',
                'modified'      => 'Jun 26, 2025',
        ],
];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-3hUu8Uf9O5EKeosFVJeFt3uTJS3BM4tiT0/5DSXUFWf9sYQYC1lV2CmvYzu3/n6PvJEa3TBUnIFVYVQF5iJrBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="pages-shell">
        <div class="pages-toolbar">
                <div class="pages-header">
                        <div class="pages-header-left">
                                <h1>Pages</h1>
                                <p>Manage landing pages, stories, and campaign templates in one place.</p>
                        </div>
                        <div class="pages-header-right">
                                <div class="quick-actions">
                                        <button class="icon-button" type="button" data-tooltip="Refresh">
                                                <i class="fa-solid fa-rotate"></i>
                                        </button>
                                        <button class="icon-button" type="button" data-tooltip="Share">
                                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                        </button>
                                        <button class="icon-button" type="button" data-tooltip="Insights">
                                                <i class="fa-solid fa-chart-line"></i>
                                        </button>
                                </div>
                                <div class="pages-actions">
                                        <label class="search-input">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                                <input type="search" placeholder="Search pages" />
                                                <span class="shortcut-hint">⌘K</span>
                                        </label>
                                        <button class="pill-button" type="button">
                                                <i class="fa-regular fa-file-lines"></i>
                                                Templates
                                        </button>
                                        <button class="pill-button primary" type="button">
                                                <i class="fa-solid fa-plus"></i>
                                                New page
                                        </button>
                                </div>
                        </div>
                </div>

                <div class="pages-tabs-row">
                        <div class="pages-tabs" role="tablist">
<?php   foreach ( $filters as $filter ) { ?>
                                <button class="tab-button <?=$filter['active'] ? 'active' : ''?>" type="button" role="tab" aria-selected="<?=$filter['active'] ? 'true' : 'false'?>">
                                        <?=$filter['label']?>
                                        <span class="tab-badge"><?=$filter['count']?></span>
                                </button>
<?php   } //FOR each filter ?>
                        </div>
                        <div class="quick-actions view-toggles">
                                <button class="icon-button active" type="button" data-tooltip="List view" aria-pressed="true">
                                        <i class="fa-solid fa-list"></i>
                                </button>
                                <button class="icon-button" type="button" data-tooltip="Grid view" aria-pressed="false">
                                        <i class="fa-solid fa-grip"></i>
                                </button>
                        </div>
                </div>

                <div class="filter-chips">
<?php   foreach ( $chips as $chip ) { ?>
                        <button class="chip-button" type="button" data-color="<?=$chip['color']?>">
                                <i class="fa-solid fa-circle"></i>
                                <?=$chip['label']?>
                        </button>
<?php   } //FOR each chip ?>
                        <button class="chip-button clear" type="button">
                                Clear filters
                        </button>
                </div>
        </div>

        <div class="pages-card">
                <div class="bulk-actions-bar" aria-hidden="true">
                        <div class="bulk-summary">
                                <span class="bulk-count">0 selected</span>
                                <span class="bulk-divider"></span>
                                Choose an action for the selected pages.
                        </div>
                        <div class="bulk-actions">
                                <button type="button">Publish</button>
                                <button type="button">Move to drafts</button>
                                <button type="button" class="bulk-clear">Clear selection</button>
                        </div>
                </div>

                <div class="pages-table-wrapper">
                        <table class="pages-table">
                                <colgroup>
                                        <col class="checkbox-col" />
                                        <col class="wide" />
                                        <col />
                                        <col />
                                        <col />
                                        <col />
                                        <col />
                                        <col class="actions-col" />
                                </colgroup>
                                <thead>
                                        <tr>
                                                <th class="checkbox-cell">
                                                        <label class="checkbox">
                                                                <input type="checkbox" aria-label="Select all" />
                                                        </label>
                                                </th>
                                                <th>Page</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Author</th>
                                                <th>Reports</th>
                                                <th>Updated</th>
                                                <th class="actions-cell">Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
<?php   foreach ( $pages as $page ) { ?>
                                        <tr class="page-row" data-status="<?=$page['statusClass']?>"<?=$page['cta'] ?? false ? ' data-cta="true"' : ''?>>
                                                <td class="checkbox-cell">
                                                        <label class="checkbox">
                                                                <input type="checkbox" aria-label="Select <?=$page['title']?>" />
                                                        </label>
                                                </td>
                                                <td class="title-cell">
                                                        <div class="page-main">
                                                                <span class="page-avatar" aria-hidden="true"><?=substr($page['title'], 0, 1)?></span>
                                                                <div class="page-meta">
                                                                        <button class="title-button" type="button">
                                                                                <?=$page['title']?>
                                                                        </button>
                                                                        <p class="subtitle">
                                                                                <?=$page['views']?> • <?=$page['created']?>
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </td>
                                                <td>
                                                        <span class="badge <?=$page['statusClass']?>">
                                                                <?=$page['status']?>
                                                        </span>
                                                </td>
                                                <td>
                                                        <span class="chip" data-color="<?=$page['typeColor']?>">
                                                                <?=$page['type']?>
                                                        </span>
                                                </td>
                                                <td>
                                                        <button class="author-filter" type="button">
                                                                <i class="fa-solid fa-user"></i>
                                                                <?=$page['author']?>
                                                        </button>
                                                </td>
                                                <td>
                                                        <button class="reports-button" type="button">
                                                                <i class="fa-solid fa-flag"></i>
                                                                <?=$page['reports'] ? $page['reports'].' reports' : 'No reports'?>
                                                        </button>
                                                </td>
                                                <td>
                                                        <div class="date-meta">
                                                                <span><?=$page['modified']?></span>
                                                                <span class="label">Last edited</span>
                                                        </div>
                                                </td>
                                                <td class="actions-cell">
                                                        <div class="action-menu">
                                                                <button class="action-button" type="button" data-tooltip="Edit">
                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                </button>
                                                                <button class="action-button" type="button" data-tooltip="Preview">
                                                                        <i class="fa-regular fa-eye"></i>
                                                                </button>
                                                                <button class="action-button" type="button" data-tooltip="More">
                                                                        <i class="fa-solid fa-ellipsis"></i>
                                                                </button>
                                                        </div>
                                                </td>
                                        </tr>
<?php   } //FOR each page ?>
                                </tbody>
                        </table>
                </div>
        </div>
</div>

<style>
.pages-shell {
        --pages-bg: #f5f7fb;
        --pages-card-bg: #ffffff;
        --pages-border: #e0e6f1;
        --pages-text: #1f2937;
        --pages-muted: #6b7280;
        --pages-accent: #2563eb;
        --pages-badge-published: #dcfce7;
        --pages-badge-draft: #fef3c7;
        --pages-badge-scheduled: #fee2e2;
        --pages-badge-unpublished: #e0e7ff;
        --pages-badge-trash: #f3f4f6;
        --pages-chip-bg: #eef2ff;
        --pages-chip-color: #4338ca;
        --pages-sticky-offset: 64px;
        background: var(--pages-bg);
        padding: 32px 32px 80px;
        display: flex;
        flex-direction: column;
        gap: 24px;
        font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

.pages-toolbar {
        position: sticky;
        top: 0;
        z-index: 20;
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding-bottom: 8px;
        background: linear-gradient(180deg, var(--pages-bg) 75%, rgba(245, 247, 251, 0));
        backdrop-filter: blur(6px);
}

.pages-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 24px;
}

.pages-header h1 {
        margin: 0;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: -0.02em;
}

.pages-header p {
        margin: 6px 0 0;
        color: var(--pages-muted);
}

.pages-header-right {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 12px;
        min-width: 280px;
}

.quick-actions {
        display: inline-flex;
        align-items: center;
        gap: 8px;
}

.icon-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 10px;
        border: 1px solid transparent;
        background: rgba(37, 99, 235, 0.08);
        color: var(--pages-accent);
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}

.icon-button:hover,
.icon-button:focus-visible {
        background: rgba(37, 99, 235, 0.16);
        border-color: rgba(37, 99, 235, 0.24);
        outline: none;
}

.icon-button.active {
        background: rgba(37, 99, 235, 0.18);
        border-color: rgba(37, 99, 235, 0.3);
}

[data-tooltip] {
        position: relative;
}

[data-tooltip]::after,
[data-tooltip]::before {
        pointer-events: none;
        position: absolute;
        opacity: 0;
        transition: opacity 0.18s ease, transform 0.18s ease;
}

[data-tooltip]::after {
        content: attr(data-tooltip);
        bottom: calc(100% + 10px);
        left: 50%;
        transform: translate(-50%, -4px);
        background: rgba(15, 23, 42, 0.95);
        color: #fff;
        padding: 6px 10px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 500;
        white-space: nowrap;
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.2);
        z-index: 30;
}

[data-tooltip]::before {
        content: "";
        bottom: calc(100% + 4px);
        left: 50%;
        transform: translate(-50%, -4px);
        border-width: 6px;
        border-style: solid;
        border-color: rgba(15, 23, 42, 0.95) transparent transparent transparent;
        z-index: 29;
}

[data-tooltip]:hover::after,
[data-tooltip]:hover::before,
[data-tooltip]:focus-visible::after,
[data-tooltip]:focus-visible::before {
        opacity: 1;
        transform: translate(-50%, 0);
}

.pages-actions {
        display: flex;
        align-items: center;
        gap: 12px;
}

.search-input {
        position: relative;
        display: inline-flex;
        align-items: center;
}

.search-input input {
        width: 260px;
        padding: 10px 76px 10px 38px;
        border-radius: 10px;
        border: 1px solid var(--pages-border);
        background: #fff;
        font-size: 14px;
        color: var(--pages-text);
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.search-input input:focus {
        outline: none;
        border-color: rgba(37, 99, 235, 0.55);
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.18);
}

.search-input i {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--pages-muted);
        font-size: 14px;
        pointer-events: none;
}

.shortcut-hint {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        font-weight: 600;
        color: var(--pages-muted);
        background: #f3f4f6;
        border-radius: 8px;
        padding: 4px 8px;
}

.pill-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 10px 14px;
        font-size: 14px;
        font-weight: 600;
        color: var(--pages-text);
        border-radius: 10px;
        border: 1px solid var(--pages-border);
        background: #fff;
        cursor: pointer;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.pill-button:hover,
.pill-button:focus-visible {
        border-color: rgba(37, 99, 235, 0.5);
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.12);
        outline: none;
}

.pill-button.primary {
        background: var(--pages-accent);
        border-color: var(--pages-accent);
        color: #fff;
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.18);
}

.pages-tabs-row {
        display: flex;
        align-items: center;
        gap: 16px;
}

.pages-tabs {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        border-radius: 14px;
        padding: 6px;
        background: rgba(37, 99, 235, 0.08);
        overflow-x: auto;
}

.tab-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border-radius: 12px;
        border: none;
        background: transparent;
        color: var(--pages-text);
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease;
}

.tab-button .tab-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        font-size: 12px;
        font-weight: 600;
        background: rgba(37, 99, 235, 0.18);
        color: var(--pages-accent);
}

.tab-button.active {
        background: #fff;
        color: var(--pages-accent);
        box-shadow: 0 12px 24px rgba(37, 99, 235, 0.18);
}

.tab-button.active .tab-badge {
        background: var(--pages-accent);
        color: #fff;
}

.filter-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
}

.chip-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 6px 12px;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        font-size: 12px;
        cursor: pointer;
        background: rgba(37, 99, 235, 0.1);
        color: var(--pages-accent);
}

.chip-button.clear {
        background: rgba(239, 68, 68, 0.12);
        color: #b91c1c;
}

.chip-button i {
        font-size: 11px;
}

.pages-card {
        border-radius: 18px;
        border: 1px solid var(--pages-border);
        background: var(--pages-card-bg);
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
        overflow: hidden;
}

.bulk-actions-bar {
        position: sticky;
        top: var(--pages-sticky-offset);
        z-index: 30;
        display: none;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 14px 20px;
        border-bottom: 1px solid var(--pages-border);
        background: #fff;
}

.bulk-actions-bar.is-active {
        display: flex;
}

.bulk-summary {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
}

.bulk-divider {
        width: 1px;
        height: 18px;
        background: var(--pages-border);
}

.bulk-actions {
        display: flex;
        align-items: center;
        gap: 8px;
}

.bulk-actions button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid var(--pages-border);
        background: #fff;
        border-radius: 10px;
        padding: 8px 14px;
        font-weight: 600;
        font-size: 13px;
        cursor: pointer;
        transition: border-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
}

.bulk-actions button:hover,
.bulk-actions button:focus-visible {
        border-color: rgba(37, 99, 235, 0.5);
        color: var(--pages-accent);
        box-shadow: 0 12px 24px rgba(37, 99, 235, 0.12);
        outline: none;
}

.bulk-actions .bulk-clear {
        color: #ef4444;
        border-color: rgba(239, 68, 68, 0.4);
}

.bulk-actions .bulk-clear:hover,
.bulk-actions .bulk-clear:focus-visible {
        border-color: #ef4444;
        color: #b91c1c;
        box-shadow: 0 12px 24px rgba(239, 68, 68, 0.15);
}

.pages-table-wrapper {
        overflow-x: auto;
}

.pages-table {
        width: 100%;
        min-width: 960px;
        border-collapse: collapse;
}

.pages-table thead {
        position: sticky;
        top: var(--pages-sticky-offset);
        z-index: 15;
        background: #f9fafc;
        box-shadow: 0 6px 12px rgba(15, 23, 42, 0.04);
}

.pages-table thead th {
        text-align: left;
        padding: 18px 24px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--pages-muted);
        background: #f9fafc;
        border-bottom: 1px solid var(--pages-border);
}

.checkbox-cell {
        width: 72px;
        padding-left: 20px;
}

.pages-table tbody tr {
        border-bottom: 1px solid var(--pages-border);
        transition: background 0.2s ease;
}

.pages-table tbody tr:hover {
        background: rgba(37, 99, 235, 0.05);
}

.title-cell {
        padding-left: 0;
}

.pages-table tbody td {
        padding: 18px 24px;
        font-size: 14px;
        color: var(--pages-text);
        vertical-align: middle;
}

.page-main {
        display: flex;
        align-items: center;
        gap: 16px;
}

.page-avatar {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 14px;
        background: rgba(37, 99, 235, 0.12);
        font-size: 16px;
        font-weight: 700;
        color: var(--pages-accent);
}

.page-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
}

.title-button {
        border: none;
        background: transparent;
        padding: 0;
        font-weight: 700;
        font-size: 16px;
        color: inherit;
        cursor: pointer;
        text-align: left;
}

.title-button:hover,
.title-button:focus-visible {
        color: var(--pages-accent);
        outline: none;
}

.page-row[data-cta="true"] .title-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 18px;
        border-radius: 999px;
        background: var(--pages-accent);
        color: #fff;
        box-shadow: 0 14px 24px rgba(37, 99, 235, 0.28);
}

.page-row[data-cta="true"] .title-button::after {
        content: 'Header CTA';
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 2px 8px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.22);
}

.page-row[data-cta="true"] .title-button:hover,
.page-row[data-cta="true"] .title-button:focus-visible {
        color: #fff;
}

.subtitle {
        margin: 0;
        color: var(--pages-muted);
        font-size: 13px;
}

.badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
}

.badge.published {
        background: var(--pages-badge-published);
        color: #15803d;
}

.badge.draft {
        background: var(--pages-badge-draft);
        color: #b45309;
}

.badge.scheduled {
        background: var(--pages-badge-scheduled);
        color: #b91c1c;
}

.badge.unpublished {
        background: var(--pages-badge-unpublished);
        color: #4338ca;
}

.chip {
        display: inline-flex;
        align-items: center;
        padding: 6px 14px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 12px;
        background: var(--pages-chip-bg);
        color: var(--pages-chip-color);
}

.chip[data-color="blue"] {
        background: rgba(37, 99, 235, 0.14);
        color: #1d4ed8;
}

.chip[data-color="violet"] {
        background: rgba(139, 92, 246, 0.16);
        color: #5b21b6;
}

.chip[data-color="emerald"] {
        background: rgba(16, 185, 129, 0.18);
        color: #047857;
}

.chip[data-color="pink"] {
        background: rgba(219, 39, 119, 0.18);
        color: #be185d;
}

.chip[data-color="amber"] {
        background: rgba(217, 119, 6, 0.18);
        color: #b45309;
}

.chip[data-color="slate"] {
        background: rgba(148, 163, 184, 0.18);
        color: #334155;
}

.author-filter,
.reports-button {
        border: none;
        background: transparent;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font: inherit;
        color: inherit;
        cursor: pointer;
}

.author-filter:hover,
.author-filter:focus-visible,
.reports-button:hover,
.reports-button:focus-visible {
        color: var(--pages-accent);
        outline: none;
}

.date-meta {
        display: flex;
        flex-direction: column;
        gap: 2px;
}

.date-meta .label {
        font-size: 12px;
        color: var(--pages-muted);
}

.action-menu {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        justify-content: flex-end;
}

.action-button {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        border: 1px solid transparent;
        background: rgba(37, 99, 235, 0.08);
        color: var(--pages-accent);
        cursor: pointer;
        transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
}

.action-button:hover,
.action-button:focus-visible {
        background: rgba(37, 99, 235, 0.16);
        border-color: rgba(37, 99, 235, 0.24);
        outline: none;
}

.actions-cell {
        text-align: right;
        padding-right: 28px;
}

.checkbox {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
}

.checkbox input {
        appearance: none;
        margin: 0;
        width: 20px;
        height: 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        cursor: pointer;
        background: transparent;
        border-radius: 6px;
        border: 2px solid var(--pages-border);
        transition: border-color 0.2s ease, background 0.2s ease;
}

.checkbox input:focus-visible {
        outline: none;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.28);
}

.checkbox input::after {
        content: "\f00c";
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        font-size: 12px;
        color: #fff;
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.2s ease, transform 0.2s ease;
}

.checkbox input:checked {
        background: var(--pages-accent);
        border-color: var(--pages-accent);
}

.checkbox input:checked::after {
        opacity: 1;
        transform: scale(1);
}

@media (max-width: 1024px) {
        .pages-header {
                flex-direction: column;
        }

        .pages-header-right {
                align-items: stretch;
        }

        .pages-actions {
                flex-wrap: wrap;
                justify-content: flex-start;
        }

        .pages-tabs-row {
                flex-direction: column;
                align-items: stretch;
        }

        .view-toggles {
                align-self: flex-end;
        }
}
</style>
