<div class="dashboard-menu">
    <div class="dashboard-menu-panel">
        <a href="{{ Auth::user()->role == 'Mentor' ? url('mentor/courses') : url('member/courses') }}"
            class="btn bg-outline-green btn-sm"><i class="uil uil-notebooks me-1"></i>My Courses
        </a>
        <a href="/profile" class="btn bg-outline-green btn-sm"><i class="uil uil-user-md me-1"></i>Profile
        </a>
    </div>
</div>
