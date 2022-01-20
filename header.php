

<div class="header-wrapper flex p-1 justify-between items-center">
    <h1 class="text-white cursor-pointer ">Dashboard</h1>
    <div class="flex gap-3">

        <span id="hello"  class="text-white">Hello <?php echo explode('@' ,$_SESSION['user'])[0]; ?></span>
        
        <form class="search-wrapper flex gap-3 bg-dark-blue rounded-sm ">
            <input id="search" name="search" class="bg-dark-blue p-1 outline-none rounded-sm text-white font-sm" type="text" placeholder="  Search..">
                <button style="margin-right:0.5rem;" class="bg-dark-blue outline-none rounded-sm text-white font-sm">
                    <i class="fas fa-search text-white"></i>
                </button>
        </form>
        <form method="POST" action="/ShopNow/logout.php" class="user bg-violet p-1 cursor-pointer rounded-full">
            <button style="background: #00000000;" class="outline-none border-none" type="submit"  >
                <i class="fas fa-user text-white  cursor-pointer"></i>
            </button>
        </form>
    </div>
</div>

<script>
    setTimeout(()=>{
        $('#hello').remove()
    }, 2000);
</script>


