<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Taskly')</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #142B4A;
            color: #293247;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* NAVBAR */
        .navbar {
            background: #ffffff;
            padding: 18px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .nav-content {
            position: relative;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            min-height: 36px;
        }

        .brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            color: #5198a1;
            font-family: 'Trebuchet MS', Arial, sans-serif;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1.5px;
            text-decoration: none;
        }

        .brand:hover {
            color: #294d38;
        }

        .nav-links {
            display: flex;
            gap: 22px;
            margin-left: auto;
        }

        .nav-links a {
            color: #596579;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
        }

        .nav-links a:hover {
            color: #5198a1;
        }

        /* MAIN CONTENT */
        main {
            flex: 1;
            padding: 40px 0;
            background: #142B4A;
        }

        .page-title {
            font-size: 28px;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .subtitle {
            color: #c4d0df;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* CARD */
        .card {
            background: #ffffff;
            color: #293247;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
        }

        /* PERBAIKAN TEKS DI DALAM CARD */
        .card h1,
        .card h2,
        .card h3,
        .card h4 {
            color: #294d38;
        }

        .card p {
            color: #596579;
            line-height: 1.6;
        }

        .card .subtitle {
            color: #596579;
        }

        .card .page-header h1 {
            color: #294d38;
        }

        .card .page-header p {
            color: #596579;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            padding: 11px 18px;
            background: #5265d8;
            color: #ffffff !important;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            background: #4052bd;
        }

        /* FORM */
        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #293247;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #dce1eb;
            border-radius: 7px;
        }

        /* DASHBOARD */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .stat-number {
            font-size: 28px;
            font-weight: bold;
            color: #5265d8;
            margin-top: 12px;
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .task-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            min-width: 650px;
        }

        .task-table th,
        .task-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eeeae1;
        }

        .task-table th {
            background: #142B4A;
            color: #ffffff;
            font-size: 13px;
        }

        .task-table td {
            color: #555555;
            font-size: 14px;
        }

        /* FOOTER */
        .footer {
            background: #ffffff;
            border-top: 1px solid #e5e7eb;
            padding: 20px;
            text-align: center;
            color: #8490a3;
            font-size: 13px;
        }

        /* PAGE HEADER */
        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            color: #ffffff;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #c4d0df;
        }

        /* TASK MANAGEMENT */
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
        }

        .card-header h2 {
            color: #294d38;
            margin-bottom: 6px;
        }

        .card-header p {
            color: #596579;
            font-size: 14px;
        }

        .task-count {
            background: #e5eee6;
            color: #294d38;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
        }

        /* TASK STATUS */
        .status {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status.done {
            background: #e1f1e5;
            color: #267342;
        }

        .status.process {
            background: #fff0d5;
            color: #a66b13;
        }

        .status.pending {
            background: #f4e5e2;
            color: #a34c40;
        }

        .empty-data {
            text-align: center !important;
            color: #999999 !important;
            padding: 30px !important;
        }

        /* PROFILE */
        .profile-card {
            background: #ffffff;
            color: #293247;
            max-width: 600px;
            margin: 20px auto;
            padding: 35px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
        }

        .profile-avatar {
            width: 85px;
            height: 85px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #294d38;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            font-weight: bold;
        }

        .profile-card h2 {
            color: #294d38;
            margin-bottom: 6px;
        }

        .profile-role {
            color: #888888;
            font-size: 14px;
        }

        .profile-divider {
            height: 1px;
            background: #eeeae1;
            margin: 25px 0;
        }

        .profile-info {
            text-align: left;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #f0eee8;
        }

        .info-item span {
            color: #777777;
        }

        .info-item strong {
            color: #294d38;
            text-align: right;
        }

        .account-status {
            color: #267342 !important;
        }

        /* LOGOUT */
        .logout-button {
            display: inline-block;
            margin-top: 10px;
            padding: 11px 28px;
            background: #f5e7e4;
            color: #a34c40;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.2s;
        }

        .logout-button:hover {
            background: #ecd4cf;
        }

        /* RESPONSIVE */
        @media (max-width: 650px) {
            .nav-content {
                flex-direction: column;
                justify-content: center;
                gap: 15px;
            }

            .brand {
                position: static;
                transform: none;
                font-size: 25px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 14px;
                margin-left: 0;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .table-wrapper {
                overflow-x: auto;
            }

            .task-table {
                min-width: 650px;
            }

            .card-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .profile-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

    @include('components.navbar', [
        'username' => $username ?? request('username', '')
    ])

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <x-footer />

</body>
</html>