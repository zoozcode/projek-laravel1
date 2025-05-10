<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="/css/all.min.css">
    
    <link rel="stylesheet" href="/admin.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/logo.png" alt="">
                    <h2>SMK</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="/admin/admin"><span class="material-symbols-outlined">dashboard</span>
                    <h3>dashboard</h3>
                </a>
                <a href="/admin/siswa"><span class="material-symbols-outlined">school</span>
                    <h3>siswa</h3>
                </a>
                <a href=""><span class="material-symbols-outlined">social_leaderboard </span>
                    <h3>prestasi siswa</h3>
                </a>
                <a href=""><span class="material-symbols-outlined">co_present</span>
                    <h3>pegawai</h3>
                </a>
                <a href="logout"><span class="material-symbols-outlined">logout</span>
                    <h3>keluar</h3>
                </a>
            </div>
        </aside>

        {{-- end of aside --}}
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics </span>
                    <div class="middle">
                        <div class="left">
                            <h3>total sales</h3>
                            <h1>$25.024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of sales --}}
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>total expenses</h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of expenses --}}
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart </span>
                    <div class="middle">
                        <div class="left">
                            <h3>total sales</h3>
                            <h1>$10.024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                {{-- end of income --}}
            </div>
        </main>

    </div>
</body>
</html>