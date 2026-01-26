<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('style/components/admin.css') }}">
</head>
<body>

<header class="topbar">
    <div class="logo">Store Admin</div>
    <div class="user">
        Admin
        <a href="#">Logout</a>
    </div>
</header>

<div class="admin-layout">
    <aside class="sidebar">
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.teams.index') }}">Teams</a>
            <a href="{{ route('admin.teams.create') }}">Create Team</a>
        </nav>
    </aside>

    <main class="content">
        @yield('content')
    </main>
</div>
    
</body>
</html>