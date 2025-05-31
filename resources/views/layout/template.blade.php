<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
    <link rel="shortcut icon" href="/zooz.png" type="image/x-icon">

    
    <link rel="stylesheet" href="/contoh.css">
<style>
  *{
    margin: 0;
}

.sidebar3{
   background: #f6f6f9;
    width: 300px;
    height: 100vh;
    position: fixed;
    transform: translateX(-100%);
    transition: 0.5 ease-in-out;
    z-index: 5;
}

.sidebar3.active{
    transform: translateX(0px);
    transition: 0.5 ease-in-out;
}

/* .sidebar3 .body a:last-child{
    position: absolute;
    bottom: 2rem;
    width: 100%;
} */


.sidebar3 .head{
    background-color: #0d6efd;
    color: white;
    pad: 10px;
    text-align: right;
}

.sidebar3 .head i{
    font-weight: 900;
    font-size: 30px;
}

.sidebar3 .head i:hover{
    cursor: pointer;
}

.sidebar3 .body a{
    text-decoration: none;
    display: block;
    padding: 10px;
}

.sidebar3 .body a:hover{
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
}

.main4{
    height: 80vh;
    background-color: rgb(255, 255, 255);
    transition: 0.5s ease-in-out;
}

.main4.inactive{
    /* background-color: rgba(0, 0, 0, 0.5); */
    transition: 0.5 ease-in-out;
}

.navbar2{
    background-color: rgb(235, 26, 106);
    /* padding: 20px; */
}

.navbar2 i{
    color: white;
    font-size: 30px;
    font-weight: 800;
}

.navbar2 i:hover{
    cursor: pointer;
}

.main4 h1{
    text-align: center;
    margin-top: 10px;
}

.main4 p{
    margin-top: 20px;
}
</style>
</head>
<body>
    <div class="sidebar3" id="sidebar">
        <div class="head">
            <i onclick="closeSidebar()" class="bi bi-x" style="padding-right: 10px"></i>
        </div>
        <div class="body">
             <a href="/admin/admin"><span class="material-symbols-outlined">dashboard</span>
                    <h3>dashboard</h3>
                </a>
                <a href="/admin/kategori"><span class="material-symbols-outlined">equalizer</span>
                    <h3>kategori</h3>
                </a>
                <a href="/admin/produk"><span class="material-symbols-outlined">shopping_cart_checkout</span>
                    <h3>produk</h3>
                </a>
                <a href="/admin/stock"><span class="material-symbols-outlined">blood_pressure</span>
                    <h3>stock barang</h3>
                </a>
                <a href="logout"><span class="material-symbols-outlined">logout</span>
                    <h3>keluar</h3>
                </a>
        </div>
    </div>
    <div class="main4" id="main">
        <div class="navbar2">
           <i onclick="openSidebar()" class="bi bi-list" style="padding-left: 10px"></i>
        </div>
        @yield('content')
    </div>
</body>
<script>
    var sidebar = document.getElementById('sidebar')
    var main = document.getElementById('main')
    function openSidebar(){
        sidebar.classList.add('active')
        main.classList.add('inactive')
    }
    function closeSidebar(){
        sidebar.classList.remove('active')
        main.classList.remove('inactive')
    }
</script>
</html>