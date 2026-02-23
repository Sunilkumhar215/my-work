<style>
.sidebar-nav{width:280px;background:#0f172a;min-height:100vh;position:fixed;left:0;top:0;padding:20px;color:white}
/* .main-wrapper{margin-left:280px;width:calc(100% - 280px)} */
:root{--primary-gradient:linear-gradient(135deg,#6366f1 0%,#a855f7 100%);--bg-soft:#f8fafc;--card-shadow:0 10px 25px -5px rgba(0,0,0,.04)}
/* body{background:var(--bg-soft);font-family:Inter,sans-serif} */
.dashboard-header{background:rgba(255,255,255,.8);backdrop-filter:blur(10px);border-bottom:1px solid rgba(0,0,0,.05);position:sticky;top:0;z-index:1000;padding:15px 0}

/* 1. Root font-size fix karein (Layout file mein check karein) */
html {
    font-size: 16px; /* Yeh fix rakhein */
}

body {
    font-family: 'Inter', sans-serif;
    font-size: 18px; /* Default size sabhi pages ke liye */
    line-height: 1.5;
    background-color: #f8fafc;
}

/* 2. Wrapper ki Width fix karein */
/* Agar billing page par margin-left nahi hai toh sab chhota dikhega */
.main-wrapper {
    margin-left: 280px; /* Sidebar ki width ke barabar */
    width: calc(100% - 280px);
    min-height: 100vh;
    transition: all 0.3s ease;
}

/* 3. Responsive check (Mobile par chhota na ho) */
@media (max-width: 992px) {
    .sidebar-nav { width: 0; display: none; }
    .main-wrapper { margin-left: 0; width: 100%; }
}
</style>

