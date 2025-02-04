<div class="ps-main__sidebar">
    <div class="ps-sidebar">
        <div class="ps-sidebar__top">
            <div class="ps-block--user-wellcome">
                <div class="ps-block__left">
                    <img src="{{asset('storage/accounts/8.jpg')}}" alt="Loren Gutkowski" class="avatar avatar-lg" />
                </div>
                <div class="ps-block__right">
                    <p>Hello, {{Auth::user()->username}}</p>
                    <small>Joined on {{Auth::user()->created_at->format('Y-m-d')}}</small>
                </div>
                <div class="ps-block__action">
                    <a href="{{route('user.logout')}}">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M9 12h12l-3 -3" />
                            <path d="M18 15l3 -3" />
                        </svg> </a>
                </div>
            </div>


        </div>
        <div class="ps-sidebar__content">
            <div class="ps-sidebar__center">
                <ul class="menu">
                    <li>
                        <a href="{{route('user.dashboard')}}" class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.properties')}}" class="{{ Request::is('user/properties') ? 'active' : '' }}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M22 17v-3h-20" />
                                <path d="M2 8v9" />
                                <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
                            </svg> Properties
                        </a>
                    </li>
                    <li>
                        <a href="/users/consults" class="{{ Request::is('users/consults') ? 'active' : '' }}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20.136 11.136l-8.136 -8.136l-9 9h2v7a2 2 0 0 0 2 2h7"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.467 0 .896 .16 1.236 .428"></path>
                                <path d="M19 22v.01"></path>
                                <path d="M19 19a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
                            </svg> Consults
                        </a>
                    </li>

                    <li>
                        <a href="/users/invoices" class="{{ Request::is('users/invoices') ? 'active' : '' }}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2"></path>
                              </svg> Invoices
                        </a>
                    </li>

                    <li>
                        <a href="/users/settings" class="{{ Request::is('users/settings') ? 'active' : '' }}">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg> Settings
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ps-sidebar__footer">
                <div class="ps-copyright">
                    <a href="https://Eleven11.archielite.com" title="Eleven11">
                        Eleven11
                    </a>

                    <p>© 2024 Eleven11.</p>
                </div>
            </div>
        </div>
    </div>
</div>