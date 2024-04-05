<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('moderator.dashboard') }}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-sticky-note nav-icon"></i>
                <p>
                    Posts
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ route('admin.post.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create a post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.post.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List posts</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('moderator.post.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List posts</p>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" width="15" height="17" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="white"
                          d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/>
                </svg>
                <p>
                    Categories
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ route('admin.category.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create a category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List categories</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('moderator.category.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List categories</p>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" width="15" height="17" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="white"
                          d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5V80C0 53.5 21.5 32 48 32H197.5c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
                </svg>
                <p>
                    Tags
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ route('admin.tag.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create a tag</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.tag.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List tags</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('moderator.tag.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List tags</p>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
    </ul>
</nav>
