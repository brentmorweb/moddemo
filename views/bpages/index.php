<?php
/**
 * Purpose: Renders the Pages manager prototype markup and styling.
 * Usage: Loaded by the Skins controller so the desktop wrapper can embed the prototype UI.
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

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
                                                <input id="pagesSearch" type="search" placeholder="Search pages" autocomplete="off" />
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
                        <div class="quick-actions view-toggles" role="group" aria-label="Page view modes">
                                <button class="icon-button active" type="button" data-view="list" data-tooltip="List view" aria-pressed="true">
                                        <i class="fa-solid fa-list"></i>
                                </button>
                                <button class="icon-button" type="button" data-view="grid" data-tooltip="Grid view" aria-pressed="false">
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
                                                        <input id="masterCheckbox" type="checkbox" aria-label="Select all" />
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
                                                                <input class="row-checkbox" type="checkbox" aria-label="Select <?=$page['title']?>" />
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

.pages-actions {
        display: inline-flex;
        align-items: center;
        gap: 12px;
}

.search-input {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border: 1px solid var(--pages-border);
        border-radius: 12px;
        padding: 0 12px;
        min-width: 220px;
        height: 40px;
}

.search-input input {
        border: none;
        outline: none;
        font-size: 14px;
        width: 100%;
}

.shortcut-hint {
        font-size: 12px;
        color: var(--pages-muted);
        background: rgba(37, 99, 235, 0.12);
        border-radius: 6px;
        padding: 2px 6px;
}

.pill-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 999px;
        border: 1px solid var(--pages-border);
        background: #fff;
        padding: 0 16px;
        height: 40px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}

.pill-button.primary {
        background: var(--pages-accent);
        color: #fff;
        border-color: var(--pages-accent);
        box-shadow: 0 12px 24px rgba(37, 99, 235, 0.2);
}

.pill-button:hover,
.pill-button:focus-visible {
        background: rgba(37, 99, 235, 0.08);
        border-color: rgba(37, 99, 235, 0.24);
        outline: none;
}

.pill-button.primary:hover,
.pill-button.primary:focus-visible {
        background: rgba(37, 99, 235, 0.9);
        box-shadow: 0 14px 28px rgba(37, 99, 235, 0.24);
}

.pages-tabs-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
}

.pages-tabs {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px;
        background: rgba(37, 99, 235, 0.08);
        border-radius: 16px;
}

.tab-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 12px;
        border: none;
        background: transparent;
        font-weight: 600;
        color: var(--pages-muted);
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease;
}

.tab-button.active {
        background: #fff;
        color: var(--pages-text);
        box-shadow: 0 10px 24px rgba(37, 99, 235, 0.16);
}

.tab-badge {
        background: rgba(37, 99, 235, 0.12);
        color: var(--pages-accent);
        border-radius: 999px;
        padding: 2px 10px;
        font-size: 12px;
}

.filter-chips {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
}

.chip-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 999px;
        border: 1px solid rgba(37, 99, 235, 0.2);
        background: rgba(37, 99, 235, 0.08);
        padding: 6px 16px;
        font-weight: 600;
        cursor: pointer;
}

.chip-button[data-color="blue"] {
        background: rgba(59, 130, 246, 0.12);
        border-color: rgba(59, 130, 246, 0.24);
}

.chip-button[data-color="violet"] {
        background: rgba(129, 140, 248, 0.12);
        border-color: rgba(129, 140, 248, 0.24);
}

.chip-button[data-color="pink"] {
        background: rgba(236, 72, 153, 0.12);
        border-color: rgba(236, 72, 153, 0.24);
}

.chip-button[data-color="emerald"] {
        background: rgba(16, 185, 129, 0.12);
        border-color: rgba(16, 185, 129, 0.24);
}

.chip-button[data-color="amber"] {
        background: rgba(251, 191, 36, 0.12);
        border-color: rgba(251, 191, 36, 0.24);
}

.chip-button.clear {
        background: transparent;
        color: var(--pages-muted);
        border-style: dashed;
}

.pages-card {
        position: relative;
        background: var(--pages-card-bg);
        border-radius: 24px;
        box-shadow: 0 30px 80px rgba(15, 23, 42, 0.08);
        border: 1px solid rgba(15, 23, 42, 0.08);
        overflow: hidden;
}

.bulk-actions-bar {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 24px;
        background: rgba(37, 99, 235, 0.12);
        border-bottom: 1px solid rgba(37, 99, 235, 0.24);
        border-radius: 24px 24px 0 0;
        transform: translateY(-100%);
        transition: transform 0.3s ease;
}

.bulk-actions-bar.active {
        transform: translateY(0);
}

.bulk-summary {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--pages-text);
        font-weight: 600;
}

.bulk-divider {
        width: 1px;
        height: 20px;
        background: rgba(37, 99, 235, 0.24);
}

.bulk-actions {
        display: inline-flex;
        gap: 12px;
}

.bulk-actions button {
        border: none;
        background: rgba(37, 99, 235, 0.14);
        color: var(--pages-accent);
        padding: 8px 16px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
}

.bulk-actions button:hover,
.bulk-actions button:focus-visible {
        background: rgba(37, 99, 235, 0.2);
        outline: none;
}

.pages-table-wrapper {
        overflow: auto;
}

.pages-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 940px;
}

.pages-table thead {
        background: rgba(37, 99, 235, 0.08);
        color: var(--pages-muted);
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.06em;
}

.pages-table th,
.pages-table td {
        padding: 18px 24px;
        border-bottom: 1px solid var(--pages-border);
        text-align: left;
}

.checkbox {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
        border-radius: 6px;
        border: 1px solid rgba(148, 163, 184, 0.6);
        background: #fff;
}

.checkbox input {
        opacity: 0;
        width: 100%;
        height: 100%;
        margin: 0;
}

.checkbox-cell {
        width: 52px;
}

.checkbox-cell label {
        display: inline-flex;
}

.title-cell {
        width: 320px;
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
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: rgba(37, 99, 235, 0.12);
        color: var(--pages-accent);
        font-weight: 700;
        font-size: 18px;
}

.page-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
}

.title-button {
        border: none;
        background: transparent;
        color: var(--pages-text);
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        text-align: left;
        padding: 0;
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
        padding: 6px 12px;
        border-radius: 999px;
        font-weight: 600;
        font-size: 13px;
}

.badge.published {
        background: var(--pages-badge-published);
        color: #166534;
}

.badge.draft {
        background: var(--pages-badge-draft);
        color: #92400e;
}

.badge.scheduled {
        background: var(--pages-badge-scheduled);
        color: #b91c1c;
}

.badge.unpublished {
        background: var(--pages-badge-unpublished);
        color: #3730a3;
}

.badge.trash {
        background: var(--pages-badge-trash);
        color: #4b5563;
}

.chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 999px;
        padding: 6px 14px;
        background: rgba(148, 163, 184, 0.16);
        font-weight: 600;
        text-transform: capitalize;
}

.chip[data-color="blue"] {
        background: rgba(59, 130, 246, 0.16);
        color: #1d4ed8;
}

.chip[data-color="violet"] {
        background: rgba(129, 140, 248, 0.16);
        color: #4c1d95;
}

.chip[data-color="pink"] {
        background: rgba(236, 72, 153, 0.16);
        color: #be185d;
}

.chip[data-color="emerald"] {
        background: rgba(16, 185, 129, 0.16);
        color: #047857;
}

.chip[data-color="slate"] {
        background: rgba(148, 163, 184, 0.18);
        color: #1f2937;
}

.author-filter,
.reports-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        background: transparent;
        color: var(--pages-accent);
        font-weight: 600;
        cursor: pointer;
}

.date-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
        color: var(--pages-muted);
        font-size: 13px;
}

.date-meta .label {
        text-transform: uppercase;
        letter-spacing: 0.04em;
        font-size: 11px;
}

.actions-cell {
        width: 120px;
}

.action-menu {
        display: inline-flex;
        align-items: center;
        gap: 8px;
}

.action-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 10px;
        border: 1px solid rgba(15, 23, 42, 0.12);
        background: #fff;
        color: var(--pages-text);
        cursor: pointer;
        transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}

.action-button:hover,
.action-button:focus-visible {
        background: rgba(37, 99, 235, 0.12);
        border-color: rgba(37, 99, 235, 0.24);
        outline: none;
}

.page-row[data-cta="true"] {
        position: relative;
        isolation: isolate;
}

.page-row[data-cta="true"]::after {
        content: "Featured";
        position: absolute;
        top: -12px;
        right: 32px;
        background: linear-gradient(90deg, #2563eb, #ec4899);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.1em;
        padding: 6px 14px;
        border-radius: 999px;
        box-shadow: 0 12px 24px rgba(37, 99, 235, 0.24);
        text-transform: uppercase;
}

@media (max-width: 1080px) {
        .pages-shell {
                padding: 24px 16px 60px;
        }

        .pages-header {
                flex-direction: column;
                align-items: flex-start;
        }

        .pages-header-right {
                align-items: stretch;
        }

        .pages-tabs-row {
                flex-direction: column;
                align-items: stretch;
        }

        .pages-tabs {
                justify-content: space-between;
                overflow-x: auto;
        }

        .pages-card {
                border-radius: 20px;
        }
}

@media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
        }
}
</style>
