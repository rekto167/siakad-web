<div class="navbar top-0 bg-info text-white">
    <div class="flex-none">
        <button class="btn btn-square btn-ghost" onclick="toggleSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl" href="{{route('home')}}">{{config('app.name')}}</a>
    </div>
    <div class="flex-none">
        <div class="dropdown dropdown-end text-black">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="https://i.pravatar.cc/300" />
                </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-info text-white font-bold rounded-box w-52">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</div>
