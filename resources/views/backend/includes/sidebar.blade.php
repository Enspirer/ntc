<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle " href="#">
                    <i class="nav-icon fas fa-house-user"></i>
                    Home Page
                </a>

                <ul class="nav-dropdown-items">
                    @if(App\Models\BestSelling::first() == null)
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/best_selling'))}}" href="{{ route('admin.best_selling.create') }}">                          
                                Best Selling
                            </a>
                        </li>
                    @else
                        @php
                            $best_selling = App\Models\BestSelling::first();
                        @endphp
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/best_selling'))}}" href="{{ route('admin.best_selling.edit',$best_selling->id) }}">                          
                                Best Selling
                            </a>
                        </li>
                    @endif
                    
                        
                </ul>
            </li>

            <li class="nav-item nav-dropdown ">
                <a class="nav-link nav-dropdown-toggle " href="#">
                    <i class="nav-icon fas fa-list"></i>
                    Products
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/category'))}}" href="{{ route('admin.category.index') }}">
                            Category
                        </a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/sub_category'))}}" href="{{ route('admin.sub_category.index') }}">
                            Sub Category
                        </a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/products'))}}" href="{{ route('admin.products.index') }}">
                            Products
                        </a>
                    </li>                 
                        
                </ul>
            </li>  

            <li class="nav-item nav-dropdown ">
                <a class="nav-link nav-dropdown-toggle " href="#">
                    <i class="nav-icon fas fa-briefcase"></i>
                    Careers
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/careers'))}}" href="{{ route('admin.careers.index') }}">                            
                            Job Opportunity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/candidate'))}}" href="{{ route('admin.candidate.candidate_index') }}">                            
                            Candidates
                        </a>
                    </li>      
                </ul>
            </li>           

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/inquire'))}}" href="{{ route('admin.inquire.index') }}">
                <i class="nav-icon far fa-question-circle"></i>
                    Inquire
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/news'))}}" href="{{ route('admin.news.index') }}">
                <i class="nav-icon fas fa-newspaper"></i>
                    News
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/contact_us'))}}" href="{{ route('admin.contact_us.index') }}">
                    <i class="nav-icon fas fa-comments"></i>
                    Contact Us
                </a>
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
