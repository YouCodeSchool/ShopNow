let header= `
    <div class="header-wrapper flex p-1 justify-between items-center">
    <h1 class="text-white cursor-pointer ">Dashboard</h1>
    <div class="flex gap-3">
        <form class="search-wrapper flex gap-3 bg-dark-blue rounded-sm ">
            <input id="search" name="search" class="bg-dark-blue p-1 outline-none rounded-sm text-white font-sm" type="text" placeholder="  Search..">
            <button style="margin-right:0.5rem;" class="bg-dark-blue outline-none rounded-sm text-white font-sm">
                <i class="fas fa-search text-white"></i>
            </button>
        </form>
        <div class="user bg-violet p-1 cursor-pointer rounded-full">
            <i class="fas fa-user text-white"></i>
        </div>
    </div>
    </div>  
`

$('.header').innerHTML = header
