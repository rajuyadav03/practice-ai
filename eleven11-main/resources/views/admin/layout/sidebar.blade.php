

<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{route('admin.dashboard')}}">
                Eleven 11
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav ">
                <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a class="nav-link nav-priority--9999 active show" href="{{route('admin.dashboard')}}" id="cms-core-dashboard" title="Dashboard">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown {{ (Request::is('admin/real-estate/properties') || Request::is('admin/project') || Request::is('admin/feature') || Request::is('admin/facilities') || Request::is('admin/investors') || Request::is('admin/reviews') || Request::is('admin/custom-field') || Request::is('admin/project/create') || Request::is('admin/feature/create') || Request::is('admin/investors/create') || Request::is('admin/category') || Request::is('admin/invoice') || Request::is('admin/custom-field/create')    )  ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle nav-priority-0" href="#cms-plugins-real-estate" id="cms-plugins-real-estate" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Real Estate">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M22 17v-3h-20" />
                                <path d="M2 8v9" />
                                <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                            </svg> </span>
                        <span class="nav-link-title text-truncate">
                            Real Estate
                        </span>
                    </a>
                    <div class="dropdown-menu animate slideIn dropdown-menu-start">
                        <a class="dropdown-item nav-priority-0 {{(Request::is('admin/real-estate/properties') || Request::is('admin/real-estate/properties/create')) ? 'active' : '' }}" href="{{route('admin.realestate')}}" id="cms-plugins-property" title="Properties">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>
                            <span class="nav-link-title text-truncate">
                                Properties
                            </span>
                        </a>
                        <a class="dropdown-item nav-priority-1 {{(Request::is('admin/project') || Request::is('admin/project/create')) ? 'active' : '' }}" href="/admin/project" id="cms-plugins-project" title="Projects">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Projects

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-2 {{(Request::is('admin/feature') || Request::is('admin/feature/create')) ? 'active' : '' }}" href="/admin/feature" id="cms-plugins-re-feature" title="Features">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Features

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-3 {{Request::is('admin/facilities') ? 'active' : '' }}" href="/admin/facilities" id="cms-plugins-facility" title="Facilities">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Facilities

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-3 {{(Request::is('admin/investors') || Request::is('admin/investors/create')) ? 'active' : '' }}" href="/admin/investors" id="cms-plugins-investor" title="Investors">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Investors

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-4 {{Request::is('/admin/category') ? 'active' : '' }}" href="/admin/category" id="cms-plugins-real-estate-category" title="Categories">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Categories

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-5 {{Request::is('admin/reviews') ? 'active' : '' }}" href="/admin/reviews" id="cms-plugins-real-estate-review" title="Reviews">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Reviews

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-7 {{Request::is('admin/invoice') ? 'active' : '' }}" href="/admin/invoice" id="cms-plugins-real-estate-invoice" title="Invoices">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Invoices

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-13 {{(Request::is('admin/custom-field') || Request::is('admin/custom-field/create')) ? 'active' : '' }}" href="/admin/custom-field" id="cms-plugins-real-estate-custom-fields" title="Custom Fields">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Custom Fields

                            </span>
                        </a>

                    </div>
                </li>
                {{-- <li class="nav-item ">
                    <a class="nav-link nav-priority-2" href="/admin/pages" id="cms-core-page" title="Pages">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                                <path d="M13 8l2 0" />
                                <path d="M13 12l2 0" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Pages

                        </span>
                    </a>


                </li> --}}
                <li class="nav-item dropdown {{ (Request::is('admin/post') || Request::is('admin/tags') || Request::is('admin/blog/categories'))  ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle nav-priority-3 " href="#cms-plugins-blog" id="cms-plugins-blog" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Blog">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                <path d="M7 8h10" />
                                <path d="M7 12h10" />
                                <path d="M7 16h10" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Blog

                        </span>
                    </a>


                    <div class="dropdown-menu animate slideIn dropdown-menu-start">


                        <a class="dropdown-item nav-priority-1 {{ Request::is('admin/post') ? 'active' : '' }}" href="/admin/post" id="cms-plugins-blog-post" title="Posts">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Posts

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-2 {{ Request::is('admin/blog/categories') ? 'active' : '' }}" href="admin/blog/categories" id="cms-plugins-blog-categories" title="Categories">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Categories

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-3 {{ Request::is('admin/tags') ? 'active' : '' }}" href="/admin/tags" id="cms-plugins-blog-tags" title="Tags">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Tags

                            </span>
                        </a>

                    </div>
                </li>
                <li class="nav-item dropdown {{ Request::is('admin/transaction') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle nav-priority-3" href="#cms-plugins-payments" id="cms-plugins-payments" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Payments">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                <path d="M3 10l18 0" />
                                <path d="M7 15l.01 0" />
                                <path d="M11 15l2 0" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Payments

                        </span>
                    </a>


                    <div class="dropdown-menu animate slideIn dropdown-menu-start">


                        <a class="dropdown-item nav-priority-0 {{ Request::is('admin/transaction') ? 'active' : '' }}" href="/admin/transaction" id="cms-plugins-payments-all" title="Transactions">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Transactions

                            </span>
                        </a>



                        {{-- <a class="dropdown-item nav-priority-1" href="admin/payments/methods" id="cms-plugins-payment-methods" title="Payment methods">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Payment methods

                            </span>
                        </a> --}}

                    </div>
                </li>
                <li class="nav-item {{ Request::is('admin/testimonial') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-5 " href="/admin/testimonial" id="cms-plugins-testimonial" title="Testimonials">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Testimonials

                        </span>
                    </a>


                </li>
                <li class="nav-item {{ Request::is('admin/consults') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-6" href="/admin/consults" id="cms-plugins-consult" title="Consults">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M20.136 11.136l-8.136 -8.136l-9 9h2v7a2 2 0 0 0 2 2h7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.467 0 .896 .16 1.236 .428" />
                                <path d="M19 22v.01" />
                                <path d="M19 19a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Consults
                            <span class="badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count unread-consults" data-url="admin/menu-items-count" style="display: none"></span>

                        </span>
                    </a>


                </li>
                <li class="nav-item {{ Request::is('admin/coupons') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-14" href="/admin/coupons" id="cms-plugins-real-estate-coupons" title="Coupons">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 15l6 -6" />
                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                                <path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Coupons

                        </span>
                    </a>


                </li>
                <li class="nav-item {{ Request::is('admin/accounts') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-22 " href="/admin/accounts" id="cms-plugins-real-estate-account" title="Accounts">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Accounts

                        </span>
                    </a>


                </li>
                <li class="nav-item {{ Request::is('admin/packages') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-23" href="/admin/packages" id="cms-plugins-package" title="Packages">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                                <path d="M2 13.5v5.5l5 3" />
                                <path d="M7 16.545l5 -3.03" />
                                <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                                <path d="M12 19l5 3" />
                                <path d="M17 16.5l5 -3" />
                                <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                                <path d="M7 5.03v5.455" />
                                <path d="M12 8l5 -3" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Packages

                        </span>
                    </a>


                </li>
                <li class="nav-item {{ Request::is('admin/contact') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-120" href="/admin/contact" id="cms-plugins-contact" title="Contact">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Contact
                            <span class="badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count unread-contacts" data-url="admin/menu-items-count" style="display: none"></span>

                        </span>
                    </a>


                </li>
                <li class="nav-item dropdown {{ (Request::is('admin/faq') || Request::is('admin/faq-category')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle nav-priority-420" href="#cms-plugins-faq" id="cms-plugins-faq" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="FAQs">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z" />
                                <path d="M12 16v.01" />
                                <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            FAQs

                        </span>
                    </a>


                    <div class="dropdown-menu animate slideIn dropdown-menu-start">


                        <a class="dropdown-item nav-priority-0 {{ Request::is('admin/faq') ? 'active' : '' }}" href="/admin/faq" id="cms-plugins-faq-list" title="FAQs">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                FAQs

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-1 {{ Request::is('admin/faq-category') ? 'active' : '' }}" href="/admin/faq-category" id="cms-packages-faq-category" title="Categories">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Categories

                            </span>
                        </a>

                    </div>
                </li>
                <li class="nav-item {{ Request::is('admin/newsletter') ? 'active' : '' }}">
                    <a class="nav-link nav-priority-430 " href="/admin/newsletter" id="cms-plugins-newsletter" title="Newsletters">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Newsletters

                        </span>
                    </a>


                </li>
                {{-- <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle nav-priority-900" href="#cms-plugins-location" id="cms-plugins-location" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Locations">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M3.6 9h16.8" />
                                <path d="M3.6 15h16.8" />
                                <path d="M11.5 3a17 17 0 0 0 0 18" />
                                <path d="M12.5 3a17 17 0 0 1 0 18" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Locations

                        </span>
                    </a>


                    <div class="dropdown-menu animate slideIn dropdown-menu-start">


                        <a class="dropdown-item nav-priority-0" href="admin/countries" id="cms-plugins-country" title="Countries">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Countries

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-1" href="admin/states" id="cms-plugins-state" title="States">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                States

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-2" href="admin/cities" id="cms-plugins-city" title="Cities">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Cities

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-3" href="admin/locations/bulk-import" id="cms-plugins-location-bulk-import" title="Location Importer">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Location Importer

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-4" href="admin/locations/export" id="cms-plugins-location-export" title="Location Exporter">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Location Exporter

                            </span>
                        </a>

                    </div>
                </li> --}}
                {{-- <li class="nav-item ">
                    <a class="nav-link nav-priority-999" href="admin/media" id="cms-core-media" title="Media">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Media

                        </span>
                    </a>


                </li> --}}
                {{-- <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle nav-priority-2000" href="#cms-core-appearance" id="cms-core-appearance" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Appearance">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                                <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                                <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                                <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Appearance

                        </span>
                    </a>


                    <div class="dropdown-menu animate slideIn dropdown-menu-start">


                        <a class="dropdown-item nav-priority-1" href="admin/theme/all" id="cms-core-theme" title="Themes">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Themes

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-2" href="admin/menus" id="cms-core-menu" title="Menus">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Menus

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-3" href="admin/widgets" id="cms-core-widget" title="Widgets">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Widgets

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-4" href="admin/theme/options" id="cms-core-theme-option" title="Theme Options">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Theme Options

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-5" href="admin/theme/custom-css" id="cms-core-appearance-custom-css" title="Custom CSS">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Custom CSS

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-6" href="admin/theme/custom-js" id="cms-core-appearance-custom-js" title="Custom JS">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Custom JS

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-6" href="admin/theme/custom-html" id="cms-core-appearance-custom-html" title="Custom HTML">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Custom HTML

                            </span>
                        </a>



                        <a class="dropdown-item nav-priority-6" href="admin/theme/robots-txt" id="cms-core-appearance-robots-txt" title="Robots.txt Editor">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Robots.txt Editor

                            </span>
                        </a>

                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle nav-priority-3000" href="#cms-core-plugins" id="cms-core-plugins" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" title="Plugins">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z" />
                                <path d="M4 20l3.5 -3.5" />
                                <path d="M15 4l-3.5 3.5" />
                                <path d="M20 9l-3.5 3.5" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Plugins

                        </span>
                    </a>
                    <div class="dropdown-menu animate slideIn dropdown-menu-start">
                        <a class="dropdown-item nav-priority-1" href="admin/plugins/installed" id="cms-core-plugins-installed" title="Installed Plugins">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Installed Plugins
                            </span>
                        </a>
                        <a class="dropdown-item nav-priority-2" href="admin/plugins/new" id="cms-core-plugins-marketplace" title="Add New Plugin">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                </svg> </span>

                            <span class="nav-link-title text-truncate">
                                Add New Plugin
                            </span>
                        </a>
                    </div>
                </li> --}}
                {{-- <li class="nav-item ">
                    <a class="nav-link nav-priority-9999" href="admin/settings" id="cms-core-settings" title="Settings">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg> </span>
                        <span class="nav-link-title text-truncate">
                            Settings
                        </span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item ">
                    <a class="nav-link nav-priority-10000" href="admin/system" id="cms-core-system" title="Platform Administration">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                                <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            </svg> </span>

                        <span class="nav-link-title text-truncate">
                            Platform Administration
                        </span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</aside>