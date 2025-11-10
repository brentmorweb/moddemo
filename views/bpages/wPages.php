<?php
/**
 * Purpose: Demonstrates a pages manager dashboard with placeholder records.
 * Usage: Launch the window from the pages index to preview the layout and interactions.
 */
        // Loading base window skin assets
        mwSkin()->loadSheet('', 'mw.windows');
        mwSkin()->loadSheet('', 'mw.forms');

        $filters = [
                ['label' => 'Published',     'count' => 12, 'active' => true],
                ['label' => 'Unpublished',   'count' => 4,  'active' => false],
                ['label' => 'Drafts',        'count' => 8,  'active' => false],
                ['label' => 'Scheduled',     'count' => 2,  'active' => false],
                ['label' => 'Trash',         'count' => 1,  'active' => false],
        ];

        $pages = [
                [
                        'title'         => 'Home',
                        'status'        => 'Published',
                        'statusClass'   => 'published',
                        'category'      => 'Landing',
                        'views'         => '12.8k views',
                        'type'          => 'Page',
                        'author'        => 'You',
                        'reports'       => 2,
                        'created'       => 'Nov 18, 2024',
                        'modified'      => 'Jul 02, 2025',
                ],
                [
                        'title'         => 'Annual reports',
                        'status'        => 'Published',
                        'statusClass'   => 'published',
                        'category'      => 'Report',
                        'views'         => '4.2k views',
                        'type'          => 'Report',
                        'author'        => 'Casey',
                        'reports'       => 1,
                        'created'       => 'Mar 04, 2025',
                        'modified'      => 'Jun 12, 2025',
                ],
                [
                        'title'         => 'Campaign results',
                        'status'        => 'Scheduled',
                        'statusClass'   => 'scheduled',
                        'category'      => 'Report',
                        'views'         => '980 views',
                        'type'          => 'Campaign',
                        'author'        => 'Leslie',
                        'reports'       => 0,
                        'created'       => 'May 18, 2025',
                        'modified'      => 'Jun 21, 2025',
                ],
                [
                        'title'         => 'Our History',
                        'status'        => 'Published',
                        'statusClass'   => 'published',
                        'category'      => 'Story',
                        'views'         => '15.2k views',
                        'type'          => 'Story',
                        'author'        => 'You',
                        'reports'       => 3,
                        'created'       => 'Dec 03, 2024',
                        'modified'      => 'Jul 05, 2025',
                ],
                [
                        'title'         => 'Program A',
                        'status'        => 'Draft',
                        'statusClass'   => 'draft',
                        'category'      => 'Program',
                        'views'         => '540 downloads',
                        'type'          => 'Program',
                        'author'        => 'Amari',
                        'reports'       => 0,
                        'created'       => 'Apr 29, 2025',
                        'modified'      => 'Jul 05, 2025',
                ],
                [
                        'title'         => 'Program B',
                        'status'        => 'Published',
                        'statusClass'   => 'published',
                        'category'      => 'Program',
                        'views'         => '530 downloads',
                        'type'          => 'Program',
                        'author'        => 'Amari',
                        'reports'       => 1,
                        'created'       => 'Apr 29, 2025',
                        'modified'      => 'Jul 05, 2025',
                ],
                [
                        'title'         => 'Volunteer signup',
                        'status'        => 'Draft',
                        'statusClass'   => 'draft',
                        'category'      => 'Campaign',
                        'views'         => '872 views',
                        'type'          => 'Campaign',
                        'author'        => 'You',
                        'reports'       => 0,
                        'created'       => 'Jun 03, 2025',
                        'modified'      => 'Jul 07, 2025',
                ],
                [
                        'title'         => 'Press release',
                        'status'        => 'Published',
                        'statusClass'   => 'published',
                        'category'      => 'Campaign',
                        'views'         => '572.4k views',
                        'type'          => 'Campaign',
                        'author'        => 'You',
                        'reports'       => 0,
                        'created'       => 'Jan 16, 2025',
                        'modified'      => 'Jun 26, 2025',
                ],
        ];
?>

<div class="winHeader">Pages Manager</div>

<div class="winContent pages-manager" style="width: 1200px;">
        <style>
        .pages-manager {
                background: #f6f8fb;
                padding: 32px;
                font-family: "Inter", "Helvetica Neue", Arial, sans-serif;
        }

        .pages-manager .manager-card {
                background: #ffffff;
                border-radius: 18px;
                box-shadow: 0 24px 48px rgba(15, 23, 42, 0.08);
                border: 1px solid rgba(226, 232, 240, 0.8);
                overflow: hidden;
        }

        .pages-manager .manager-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 24px 28px 16px;
                border-bottom: 1px solid rgba(226, 232, 240, 0.8);
                background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .pages-manager .title-block {
                display: flex;
                flex-direction: column;
                gap: 6px;
        }

        .pages-manager .title-block h1 {
                margin: 0;
                font-size: 22px;
                color: #0f172a;
                font-weight: 600;
        }

        .pages-manager .title-block span {
                color: #64748b;
                font-size: 13px;
        }

        .pages-manager .header-actions {
                display: flex;
                gap: 12px;
                align-items: center;
        }

        .pages-manager .search-box {
                position: relative;
        }

        .pages-manager .search-box input {
                border-radius: 999px;
                border: 1px solid #e2e8f0;
                padding: 10px 16px 10px 36px;
                font-size: 13px;
                min-width: 220px;
                background: #ffffff url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"%3E%3Cpath stroke="%2394a3b8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.667 11.667L14 14m-2.667-6a4.667 4.667 0 11-9.334 0 4.667 4.667 0 019.334 0z"/%3E%3C/svg%3E') no-repeat 12px center;
        }

        .pages-manager .add-button {
                border-radius: 12px;
                background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
                color: #ffffff;
                border: none;
                padding: 10px 18px;
                font-weight: 600;
                font-size: 13px;
                cursor: pointer;
                box-shadow: 0 12px 24px rgba(79, 70, 229, 0.25);
        }

        .pages-manager .manager-toolbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px 28px;
                background: #ffffff;
        }

        .pages-manager .status-filters {
                display: flex;
                gap: 14px;
                margin: 0;
                padding: 0;
                list-style: none;
        }

        .pages-manager .status-filters li {
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 13px;
                color: #64748b;
                padding: 8px 14px;
                border-radius: 999px;
                border: 1px solid transparent;
                cursor: pointer;
                transition: all 0.2s ease;
        }

        .pages-manager .status-filters li.active {
                background: rgba(79, 70, 229, 0.1);
                border-color: rgba(79, 70, 229, 0.35);
                color: #4f46e5;
                font-weight: 600;
        }

        .pages-manager .status-filters li span {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 26px;
                padding: 2px 8px;
                border-radius: 999px;
                background: rgba(148, 163, 184, 0.15);
                color: #475569;
                font-size: 12px;
                font-weight: 600;
        }

        .pages-manager .view-modes {
                display: flex;
                gap: 10px;
        }

        .pages-manager .view-button {
                width: 34px;
                height: 34px;
                border-radius: 10px;
                border: 1px solid #e2e8f0;
                background: #f8fafc;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.2s ease;
        }

        .pages-manager .view-button.active {
                border-color: #4f46e5;
                background: rgba(79, 70, 229, 0.12);
        }

        .pages-manager .table-wrapper {
                padding: 0 28px 28px;
                background: #ffffff;
        }

        .pages-manager table {
                width: 100%;
                border-collapse: collapse;
                font-size: 13px;
        }

        .pages-manager thead th {
                text-align: left;
                padding: 14px 16px;
                color: #94a3b8;
                font-weight: 600;
                letter-spacing: 0.02em;
                border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .pages-manager tbody tr {
                transition: background 0.2s ease;
        }

        .pages-manager tbody tr:hover {
                background: rgba(79, 70, 229, 0.04);
        }

        .pages-manager tbody td {
                padding: 16px;
                border-bottom: 1px solid rgba(226, 232, 240, 0.6);
                color: #1e293b;
                vertical-align: middle;
        }

        .pages-manager .page-title {
                display: flex;
                align-items: center;
                gap: 12px;
        }

        .pages-manager .page-avatar {
                width: 38px;
                height: 38px;
                border-radius: 12px;
                background: linear-gradient(135deg, #38bdf8 0%, #2563eb 100%);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                font-weight: 700;
                font-size: 14px;
        }

        .pages-manager .page-info {
                display: flex;
                flex-direction: column;
                gap: 4px;
        }

        .pages-manager .page-info span:first-child {
                font-weight: 600;
                color: #0f172a;
        }

        .pages-manager .status-badge {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                padding: 6px 10px;
                border-radius: 999px;
                font-weight: 600;
                font-size: 12px;
        }

        .pages-manager .status-badge.published {
                background: rgba(16, 185, 129, 0.12);
                color: #047857;
        }

        .pages-manager .status-badge.draft {
                background: rgba(234, 179, 8, 0.15);
                color: #b45309;
        }

        .pages-manager .status-badge.scheduled {
                background: rgba(59, 130, 246, 0.15);
                color: #1d4ed8;
        }

        .pages-manager .status-badge.unpublished {
                background: rgba(148, 163, 184, 0.15);
                color: #475569;
        }

        .pages-manager .type-tag {
                display: inline-flex;
                padding: 6px 10px;
                border-radius: 999px;
                background: rgba(226, 232, 240, 0.6);
                color: #475569;
                font-weight: 600;
                font-size: 12px;
        }

        .pages-manager .reports-count {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                color: #475569;
                font-weight: 600;
        }

        .pages-manager .reports-count .dot {
                width: 8px;
                height: 8px;
                border-radius: 999px;
                background: #94a3b8;
        }

        .pages-manager .action-menu {
                display: inline-flex;
                gap: 10px;
                color: #94a3b8;
        }

        .pages-manager .action-menu a {
                width: 28px;
                height: 28px;
                border-radius: 8px;
                border: 1px solid rgba(226, 232, 240, 0.9);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                color: inherit;
                transition: all 0.2s ease;
        }

        .pages-manager .action-menu a:hover {
                border-color: #4f46e5;
                color: #4f46e5;
                background: rgba(79, 70, 229, 0.1);
        }
        </style>

        <div class="manager-card">
                <div class="manager-header">
                        <div class="title-block">
                                <h1>Pages</h1>
                                <span>Manage the content lifecycle of your site</span>
                        </div>
                        <div class="header-actions">
                                <div class="search-box">
                                        <input type="search" placeholder="Search pages" />
                                </div>
                                <button class="add-button">+ New Page</button>
                        </div>
                </div>

                <div class="manager-toolbar">
                        <ul class="status-filters">
<?php   foreach ( $filters as $filter ) { ?>
                                <li class="<?=$filter['active'] ? 'active' : ''?>">
                                        <?=$filter['label']?>
                                        <span><?=$filter['count']?></span>
                                </li>
<?php   } //FOR each filter ?>
                        </ul>
                        <div class="view-modes">
                                <div class="view-button active" title="List view">≡</div>
                                <div class="view-button" title="Grid view">☷</div>
                        </div>
                </div>

                <div class="table-wrapper">
                        <table>
                                <thead>
                                        <tr>
                                                <th style="width: 340px;">Title</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Author</th>
                                                <th>Reports</th>
                                                <th>Created</th>
                                                <th>Modified</th>
                                                <th style="text-align: right;">Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
<?php   foreach ( $pages as $page ) { ?>
                                        <tr>
                                                <td>
                                                        <div class="page-title">
                                                                <div class="page-avatar"><?=substr($page['title'], 0, 1)?></div>
                                                                <div class="page-info">
                                                                        <span><?=$page['title']?></span>
                                                                        <span><?=$page['views']?></span>
                                                                </div>
                                                        </div>
                                                </td>
                                                <td>
                                                        <span class="status-badge <?=$page['statusClass']?>"><?=$page['status']?></span>
                                                </td>
                                                <td>
                                                        <span class="type-tag"><?=$page['category']?></span>
                                                </td>
                                                <td><?=$page['author']?></td>
                                                <td>
                                                        <span class="reports-count">
                                                                <span class="dot"></span>
                                                                <?=$page['reports']?>
                                                        </span>
                                                </td>
                                                <td><?=$page['created']?></td>
                                                <td><?=$page['modified']?></td>
                                                <td style="text-align: right;">
                                                        <div class="action-menu">
                                                                <a href="#" title="Edit">✎</a>
                                                                <a href="#" title="Preview">👁</a>
                                                                <a href="#" title="More">⋮</a>
                                                        </div>
                                                </td>
                                        </tr>
<?php   } //FOR each page ?>
                                </tbody>
                        </table>
                </div>
        </div>
</div>

<div class="winFooter">
        <a class="close winCloseClick"></a>
        <a class="apply"></a>
</div>
