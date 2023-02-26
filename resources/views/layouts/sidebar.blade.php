<div id="sidebar" class="hidden">
    <ul class="menu bg-base-100 w-56 z-10 fixed h-screen bg-info text-white">
        <li><a>Home</a></li>
{{--        <li><a href="{{ route('mapel') }}">Mata Pelajaran</a></li>--}}
{{--        <li>--}}
            <div class="collapse ">
                <input type="checkbox" class="peer" />
                <div class="collapse-title bg-info text-white peer-checked:bg-info peer-checked:text-secondary-content">
                    <div class="flex justify-between">
                        <span>Mata Pelajaran</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
                <div class="collapse-content bg-info text-white peer-checked:bg-info peer-checked:text-secondary-content w-full">
                    <div class="hover:bg-info-content/25 p-2">
                        <a href="{{route('mapel')}}">Mata Pelajaran</a>
                    </div>
                    <div class="hover:bg-info-content/25 p-2">
                        <a href="{{route('jadwal')}}">Jadwal Pelajaran</a>
                    </div>
                </div>
            </div>
{{--        </li>--}}
    </ul>
</div>
