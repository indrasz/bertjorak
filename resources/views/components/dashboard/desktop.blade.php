<!-- Desktop sidebar -->
<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white md:block" aria-label="aside">
    <div class="text-serv-bg">

        <div class="">
            {{-- <img src="{{ asset('/assets/images/logo.svg') }}" alt="" class="object-center mx-auto my-8 "> --}}
            <a href="/">
                <img style="margin: auto;" class="py-10" src="{{ asset('frontend/images/main-logo.png') }}" alt="main-logo"
                    width="100" />
            </a>
            {{-- <svg class="object-center mx-auto my-8 " width="163" height="28" viewBox="0 0 163 28" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.348 27V1.44H2.184V25.344H17.448V27H0.348ZM28.1546 27.36C26.8346 27.36 25.6106 27.108 24.4826 26.604C23.3546 26.076 22.3706 25.368 21.5306 24.48C20.7146 23.568 20.0666 22.524 19.5866 21.348C19.1306 20.148 18.9026 18.888 18.9026 17.568C18.9026 15.792 19.2986 14.184 20.0906 12.744C20.8826 11.304 21.9746 10.152 23.3666 9.288C24.7586 8.4 26.3186 7.956 28.0466 7.956C29.8226 7.956 31.3946 8.4 32.7626 9.288C34.1306 10.176 35.2106 11.352 36.0026 12.816C36.8186 14.256 37.2266 15.84 37.2266 17.568C37.2266 17.712 37.2266 17.856 37.2266 18C37.2266 18.144 37.2146 18.264 37.1906 18.36H20.7746C20.8706 19.776 21.2666 21.06 21.9626 22.212C22.6586 23.364 23.5466 24.276 24.6266 24.948C25.7306 25.596 26.9306 25.92 28.2266 25.92C29.5226 25.92 30.7466 25.584 31.8986 24.912C33.0506 24.24 33.8546 23.376 34.3106 22.32L35.8946 22.752C35.5346 23.64 34.9586 24.432 34.1666 25.128C33.3986 25.824 32.4866 26.376 31.4306 26.784C30.3986 27.168 29.3066 27.36 28.1546 27.36ZM20.7026 16.956H35.4986C35.4026 15.492 35.0186 14.196 34.3466 13.068C33.6746 11.94 32.7866 11.052 31.6826 10.404C30.6026 9.756 29.4026 9.432 28.0826 9.432C26.7626 9.432 25.5626 9.756 24.4826 10.404C23.4026 11.052 22.5266 11.94 21.8546 13.068C21.1826 14.196 20.7986 15.492 20.7026 16.956ZM49.3983 26.1C49.2783 26.148 49.0383 26.268 48.6783 26.46C48.3183 26.652 47.8623 26.832 47.3103 27C46.7583 27.144 46.1463 27.216 45.4743 27.216C44.8263 27.216 44.2143 27.096 43.6383 26.856C43.0863 26.592 42.6423 26.208 42.3063 25.704C41.9703 25.2 41.8023 24.588 41.8023 23.868V9.756H39.1743V8.28H41.8023V1.872H43.6023V8.28H47.9583V9.756H43.6023V23.436C43.6503 24.132 43.9023 24.66 44.3583 25.02C44.8143 25.356 45.3423 25.524 45.9423 25.524C46.6863 25.524 47.3343 25.404 47.8863 25.164C48.4383 24.9 48.7623 24.732 48.8583 24.66L49.3983 26.1ZM50.7083 7.56L51.2123 4.032H50.5643V0.719999H52.4003V4.032L51.6803 7.56H50.7083ZM61.4347 27.36C59.9467 27.36 58.5667 27.108 57.2947 26.604C56.0227 26.1 54.9067 25.332 53.9467 24.3L54.7747 23.04C55.8067 24.024 56.8507 24.744 57.9067 25.2C58.9627 25.632 60.1147 25.848 61.3627 25.848C62.9707 25.848 64.2667 25.512 65.2507 24.84C66.2587 24.168 66.7627 23.232 66.7627 22.032C66.7627 21.216 66.5227 20.592 66.0427 20.16C65.5867 19.704 64.9147 19.344 64.0267 19.08C63.1627 18.792 62.1067 18.492 60.8587 18.18C59.5867 17.844 58.5067 17.496 57.6187 17.136C56.7547 16.776 56.1067 16.308 55.6747 15.732C55.2427 15.156 55.0267 14.376 55.0267 13.392C55.0267 12.168 55.3267 11.16 55.9267 10.368C56.5507 9.552 57.3787 8.952 58.4107 8.568C59.4667 8.16 60.6307 7.956 61.9027 7.956C63.3667 7.956 64.6387 8.196 65.7187 8.676C66.8227 9.156 67.6627 9.792 68.2387 10.584L67.2667 11.736C66.6667 10.968 65.8867 10.404 64.9267 10.044C63.9667 9.66 62.9107 9.468 61.7587 9.468C60.8947 9.468 60.0787 9.588 59.3107 9.828C58.5427 10.068 57.9187 10.464 57.4387 11.016C56.9827 11.544 56.7547 12.264 56.7547 13.176C56.7547 13.896 56.9227 14.46 57.2587 14.868C57.6187 15.276 58.1467 15.612 58.8427 15.876C59.5387 16.116 60.4027 16.38 61.4347 16.668C62.8987 17.028 64.1587 17.4 65.2147 17.784C66.2707 18.168 67.0867 18.672 67.6627 19.296C68.2387 19.896 68.5267 20.748 68.5267 21.852C68.5267 23.556 67.8787 24.9 66.5827 25.884C65.2867 26.868 63.5707 27.36 61.4347 27.36ZM80.2453 16.2C80.2453 14.9 80.4753 13.63 80.9353 12.39C81.3953 11.13 82.0653 9.99 82.9453 8.97C83.8453 7.93 84.9353 7.11 86.2153 6.51C87.4953 5.89 88.9453 5.58 90.5653 5.58C92.4853 5.58 94.1453 6.02 95.5453 6.9C96.9453 7.76 97.9853 8.87 98.6653 10.23L96.0253 12C95.6253 11.14 95.1153 10.46 94.4953 9.96C93.8953 9.46 93.2353 9.11 92.5153 8.91C91.8153 8.71 91.1253 8.61 90.4453 8.61C89.3253 8.61 88.3453 8.84 87.5053 9.3C86.6653 9.74 85.9553 10.33 85.3753 11.07C84.8153 11.81 84.3853 12.64 84.0853 13.56C83.8053 14.48 83.6653 15.4 83.6653 16.32C83.6653 17.34 83.8353 18.33 84.1753 19.29C84.5153 20.23 84.9853 21.07 85.5853 21.81C86.2053 22.53 86.9353 23.1 87.7753 23.52C88.6153 23.94 89.5353 24.15 90.5353 24.15C91.2153 24.15 91.9253 24.03 92.6653 23.79C93.4053 23.55 94.0853 23.18 94.7053 22.68C95.3453 22.16 95.8453 21.48 96.2053 20.64L98.9953 22.23C98.5553 23.29 97.8653 24.19 96.9253 24.93C96.0053 25.67 94.9653 26.23 93.8053 26.61C92.6653 26.99 91.5353 27.18 90.4153 27.18C88.9153 27.18 87.5453 26.87 86.3053 26.25C85.0653 25.61 83.9953 24.77 83.0953 23.73C82.1953 22.67 81.4953 21.49 80.9953 20.19C80.4953 18.87 80.2453 17.54 80.2453 16.2ZM100.543 22.41C100.543 21.41 100.823 20.54 101.383 19.8C101.963 19.04 102.753 18.46 103.753 18.06C104.753 17.64 105.913 17.43 107.233 17.43C107.933 17.43 108.643 17.48 109.363 17.58C110.103 17.68 110.753 17.84 111.313 18.06V17.07C111.313 15.97 110.983 15.11 110.323 14.49C109.663 13.87 108.713 13.56 107.473 13.56C106.593 13.56 105.763 13.72 104.983 14.04C104.203 14.34 103.373 14.77 102.493 15.33L101.383 13.11C102.423 12.41 103.463 11.89 104.503 11.55C105.563 11.21 106.673 11.04 107.833 11.04C109.933 11.04 111.583 11.6 112.783 12.72C114.003 13.82 114.613 15.39 114.613 17.43V23.28C114.613 23.66 114.673 23.93 114.793 24.09C114.933 24.25 115.163 24.34 115.483 24.36V27C115.183 27.06 114.913 27.1 114.673 27.12C114.433 27.14 114.233 27.15 114.073 27.15C113.373 27.15 112.843 26.98 112.483 26.64C112.123 26.3 111.913 25.9 111.853 25.44L111.763 24.54C111.083 25.42 110.213 26.1 109.153 26.58C108.093 27.06 107.023 27.3 105.943 27.3C104.903 27.3 103.973 27.09 103.153 26.67C102.333 26.23 101.693 25.64 101.233 24.9C100.773 24.16 100.543 23.33 100.543 22.41ZM110.533 23.37C110.773 23.11 110.963 22.85 111.103 22.59C111.243 22.33 111.313 22.1 111.313 21.9V20.1C110.753 19.88 110.163 19.72 109.543 19.62C108.923 19.5 108.313 19.44 107.713 19.44C106.513 19.44 105.533 19.68 104.773 20.16C104.033 20.64 103.663 21.3 103.663 22.14C103.663 22.6 103.783 23.04 104.023 23.46C104.283 23.88 104.643 24.22 105.103 24.48C105.583 24.74 106.173 24.87 106.873 24.87C107.593 24.87 108.283 24.73 108.943 24.45C109.603 24.17 110.133 23.81 110.533 23.37ZM142.617 27H139.317V18.21C139.317 16.75 139.077 15.68 138.597 15C138.117 14.32 137.417 13.98 136.497 13.98C135.577 13.98 134.717 14.33 133.917 15.03C133.137 15.71 132.587 16.6 132.267 17.7V27H128.967V18.21C128.967 16.75 128.727 15.68 128.247 15C127.767 14.32 127.077 13.98 126.177 13.98C125.257 13.98 124.397 14.32 123.597 15C122.817 15.68 122.257 16.57 121.917 17.67V27H118.617V11.31H121.617V14.46C122.237 13.36 123.047 12.52 124.047 11.94C125.067 11.34 126.227 11.04 127.527 11.04C128.827 11.04 129.847 11.38 130.587 12.06C131.347 12.74 131.817 13.59 131.997 14.61C132.677 13.45 133.507 12.57 134.487 11.97C135.487 11.35 136.627 11.04 137.907 11.04C138.827 11.04 139.597 11.21 140.217 11.55C140.837 11.89 141.317 12.36 141.657 12.96C141.997 13.54 142.237 14.22 142.377 15C142.537 15.76 142.617 16.57 142.617 17.43V27ZM146.49 5.7L152.91 22.89L159.3 5.7H162.87L154.5 27H151.32L142.92 5.7H146.49Z"
                    fill="black" />
            </svg> --}}
        </div>

        <div class="flex items-center pt-8 pl-5 space-x-2 border-t border-gray-100">

            {{-- validation photo --}}
            {{-- @if (auth()->user()->detail_user()->first()->photo != null)
                <img class="object-cover object-center mr-1 rounded-full w-14 h-14" src="" alt="" loading="lazy" /> --}}
            @php
                $convertImg = json_decode(Auth::user()->avatar);
            @endphp
            @if ($convertImg == null)
                <img src="{{ asset('assets/images/blank-profile-picture.png') }}" alt="profile image"
                    class="object-cover object-center mr-1 rounded-full w-14 h-14 text-gray-300">
            @elseif ($convertImg != null)
                <img src="{{ asset('/storage/account/' . Auth::user()->id . '/avatar/' . $convertImg) }}"
                    alt="profile image" class="object-cover object-center mr-1 rounded-full w-14 h-14 text-gray-300">
            @endif

            {{-- <svg class="object-cover object-center mr-1 rounded-full w-14 h-14 text-gray-300" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg> --}}

            <div>
                <!--Author name-->
                <p class="font-semibold text-gray-900 text-md">{{ Auth::user()->name }}</p>
                <p class="text-sm font-light text-serv-text">
                    @if (Auth::user()->username != null)
                        {{ '@' . Auth::user()->username }}
                    @endif
                </p>
            </div>
        </div>

        <ul class="mt-6">
            <li class="relative px-6 py-3">

                @if (request()->is('dashboard'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                    <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                        href="{{ route('dashboard.index') }}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 16V9.02123C19.5 7.75027 18.896 6.55494 17.8728 5.80101L12.3728 1.74838C10.9618 0.708674 9.03823 0.708675 7.6272 1.74838L2.1272 5.80101C1.10401 6.55494 0.5 7.75027 0.5 9.02123V16C0.5 18.2091 2.29086 20 4.5 20H5.75C6.57843 20 7.25 19.3284 7.25 18.5V16C7.25 15.1716 7.92157 14.5 8.75 14.5H11.25C12.0784 14.5 12.75 15.1716 12.75 16V18.5C12.75 19.3284 13.4216 20 14.25 20H15.5C17.7091 20 19.5 18.2091 19.5 16Z"
                                fill="#082431" />
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                @else
                    <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                        href="{{ route('dashboard.index') }}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 16V9.02123C19.5 7.75027 18.896 6.55494 17.8728 5.80101L12.3728 1.74838C10.9618 0.708674 9.03823 0.708675 7.6272 1.74838L2.1272 5.80101C1.10401 6.55494 0.5 7.75027 0.5 9.02123V16C0.5 18.2091 2.29086 20 4.5 20H5.75C6.57843 20 7.25 19.3284 7.25 18.5V16C7.25 15.1716 7.92157 14.5 8.75 14.5H11.25C12.0784 14.5 12.75 15.1716 12.75 16V18.5C12.75 19.3284 13.4216 20 14.25 20H15.5C17.7091 20 19.5 18.2091 19.5 16Z"
                                fill="#082431" />
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                @endif
            </li>
        </ul>

        <ul>
            {{-- Article Nav --}}
            @if (Auth::user()->hasRole('admin'))
                <li class="relative px-6 py-3">

                    @if (request()->is('dashboard/article') ||
                            request()->is('dashboard/article/*') ||
                            request()->is('dashboard/*/article') ||
                            request()->is('dashboard/*/article/*'))
                        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                            aria-hidden="true"></span>

                        <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                            href="{{ route('dashboard.article.index') }}">

                            <!-- Active Icons -->
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABGklEQVRIie3UMU7DUBAE0GeDaOAECAk4ACk4CRQg0XEHKCggoqDnCukiUcBVAlQICRoOEEoQEAr/iB/rJ3acUMFIq7XH1ox31vr8oyYyXOIVgynrCz1sTzLYbSBcrl5KOA99a8qJU0hq5KU+C5IaiwnuBV1FtlXYxH6JO8IqjhXRgXM/WV5hoYY4tIzuIdbaIT3WHj7UW+xthflcsh+HnHo7yHGANUV8z9G7qR2MIGXQwVmJe8MpLnAf8a0mBp+hD5eWRdzdJLEUfnMHYw2Gv2gWKuZaEZ+F+4lIRXSI91CwFDg4MRpTpcEQbbMfdgPFedQN1+14gse6X1KBeLqH+MFyMJnHFAM8YaXsvoEb9GcQ7uMa640z+Hv4Bqv4hrnPeZdbAAAAAElFTkSuQmCC" />
                            <span class="ml-4">Article</span>

                        </a>
                    @else
                        <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                            href="{{ route('dashboard.article.index') }}">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABU0lEQVRIie3VMUscURAH8F/OYJqAnYUIOTFgaSn4JaJNQhA1nyQGYqtfQa00Fop9ugip00YOUwiCVSxsRG8tdtbs7e1tzhc784fHPObNzH92/7Nv+Y8h8QybuESWsC6xEXX6CsMiDvAFvxIabOMdFnBUF/AxOhlJKC7ysqjTg1bF3iYSFHmt6sHzmuApvH1A8X2c/i3ok/wRYTU6GkbcW6xEXqPgZYJUZDjGXuzfUPPO/hFfsRT7Weo1mMT7EnkXuzjDMiYq8VUNegSvI/iAzxXfC6xjDdMlfxfnGkSuIyh8hUhZyfd6UKFBeGwNhiK4CVuMXdnXMXhMa1H3irYxGguuw0euw0ylmW/DEHTDtuTT0nenBLYaanXkYpen757gJOwcvjd11IBiAObD/uTPpLzED4xhBxeJJOPyq+a3/EO7Kh+2cRiHKT+dLHIP8CqxwaeIO8NWa1Vm7ugBAAAAAElFTkSuQmCC" />
                            <span class="ml-4">Article</span>
                        </a>
                    @endif
                </li>
            @endif

            {{-- Profile Nav --}}
            <li class="relative px-6 py-3">

                @if (request()->is('dashboard/profile') ||
                        request()->is('dashboard/profile/*') ||
                        request()->is('dashboard/*/profile') ||
                        request()->is('dashboard/*/profile/*'))
                    <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                        href="{{ route('dashboard.profile.index') }}">


                        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                            aria-hidden="true"></span>
                        <!-- Active Icons -->

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#082431"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" fill="white" />
                            <circle cx="10.5" cy="5.5" r="2.75" stroke="#082431" stroke-width="1.5" />
                            <path
                                d="M3.75 18.2581C3.75 14.6638 6.66376 11.75 10.2581 11.75H11.7419C15.3362 11.75 18.25 14.6638 18.25 18.2581C18.25 18.8059 17.8059 19.25 17.2581 19.25H4.74194C4.1941 19.25 3.75 18.8059 3.75 18.2581Z"
                                stroke="#082431" stroke-width="1.5" />
                            <path
                                d="M17.75 14.299C18.1642 13.5816 19.0816 13.3358 19.799 13.75C20.5165 14.1642 20.7623 15.0816 20.3481 15.799L19.5981 17.0981L17.9314 19.9848C17.715 20.3596 17.383 20.6541 16.985 20.8241L15.4217 21.4919C15.3603 21.518 15.2911 21.478 15.2831 21.4119L15.0797 19.7241C15.028 19.2944 15.117 18.8596 15.3333 18.4848L17 15.5981L17.75 14.299Z"
                                fill="#082431" />
                            <path
                                d="M17 15.5981L15.3333 18.4848C15.117 18.8596 15.028 19.2944 15.0797 19.7241L15.2831 21.4119C15.2911 21.478 15.3603 21.518 15.4217 21.4919L16.985 20.8241C17.383 20.6541 17.715 20.3596 17.9314 19.9848L19.5981 17.0981M17 15.5981L17.75 14.299C18.1642 13.5816 19.0816 13.3358 19.799 13.75V13.75C20.5165 14.1642 20.7623 15.0816 20.3481 15.799L19.5981 17.0981M17 15.5981L19.5981 17.0981"
                                stroke="#082431" stroke-width="1.5" />
                        </svg>

                        <span class="ml-4">Profile</span>
                        {{-- <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">
                        {{ auth()->user()->order_buyer()->count() }}
                    </span> --}}

                    </a>
                @else
                    <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                        href="{{ route('dashboard.profile.index') }}">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" fill="white" />
                            <circle cx="10.5" cy="5.5" r="2.75" stroke="#082431" stroke-width="1.5" />
                            <path
                                d="M3.75 18.2581C3.75 14.6638 6.66376 11.75 10.2581 11.75H11.7419C15.3362 11.75 18.25 14.6638 18.25 18.2581C18.25 18.8059 17.8059 19.25 17.2581 19.25H4.74194C4.1941 19.25 3.75 18.8059 3.75 18.2581Z"
                                stroke="#082431" stroke-width="1.5" />
                            <path
                                d="M17.75 14.299C18.1642 13.5816 19.0816 13.3358 19.799 13.75C20.5165 14.1642 20.7623 15.0816 20.3481 15.799L19.5981 17.0981L17.9314 19.9848C17.715 20.3596 17.383 20.6541 16.985 20.8241L15.4217 21.4919C15.3603 21.518 15.2911 21.478 15.2831 21.4119L15.0797 19.7241C15.028 19.2944 15.117 18.8596 15.3333 18.4848L17 15.5981L17.75 14.299Z"
                                fill="white" />
                            <path
                                d="M17 15.5981L15.3333 18.4848C15.117 18.8596 15.028 19.2944 15.0797 19.7241L15.2831 21.4119C15.2911 21.478 15.3603 21.518 15.4217 21.4919L16.985 20.8241C17.383 20.6541 17.715 20.3596 17.9314 19.9848L19.5981 17.0981M17 15.5981L17.75 14.299C18.1642 13.5816 19.0816 13.3358 19.799 13.75V13.75C20.5165 14.1642 20.7623 15.0816 20.3481 15.799L19.5981 17.0981M17 15.5981L19.5981 17.0981"
                                stroke="#082431" stroke-width="1.5" />
                        </svg>

                        <span class="ml-4">Profile</span>
                        {{-- <span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">
                            {{ auth()->user()->order_buyer()->count() }}
                        </span> --}}

                    </a>
                @endif
            </li>

            {{-- Product Nav --}}
            @if (Auth::user()->hasRole('admin'))
                <li class="relative px-6 py-3">

                    @if (request()->is('dashboard/product') ||
                            request()->is('dashboard/product/*') ||
                            request()->is('dashboard/*/product') ||
                            request()->is('dashboard/*/product/*'))
                        <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                            href="{{ route('dashboard.product.index') }}">


                            <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                                aria-hidden="true"></span>
                            <!-- Active Icons -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.25" y="1.25" width="19.5" height="21.5" rx="4.75"
                                    fill="#082431" stroke="#082431" stroke-width="1.5" />
                                <rect x="11" y="7" width="2" height="10" rx="1"
                                    fill="white" />
                                <rect x="17" y="11" width="2" height="10" rx="1"
                                    transform="rotate(90 17 11)" fill="white" />
                            </svg>

                            <span class="ml-4">Product</span>

                        </a>
                    @else
                        <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                            href="{{ route('dashboard.product.index') }}">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.25" y="1.25" width="19.5" height="21.5" rx="4.75"
                                    stroke="#082431" stroke-width="1.5" />
                                <rect x="11.3" y="7" width="1.4" height="10" rx="0.7"
                                    fill="#082431" />
                                <rect x="17" y="11" width="1.4" height="10" rx="0.7"
                                    transform="rotate(90 17 11)" fill="#082431" />
                            </svg>

                            <span class="ml-4">Product</span>
                        </a>
                    @endif


                </li>
            @endif

            {{-- Newsletter --}}
            @if (Auth::user()->hasRole('admin'))
                <li class="relative px-6 py-3">

                    @if (request()->is('dashboard/newsletter') ||
                            request()->is('dashboard/newsletter/*') ||
                            request()->is('dashboard/*/newsletter') ||
                            request()->is('dashboard/*/newsletter/*'))
                        <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                            href="{{ route('dashboard.newsletter.index') }}">


                            <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                                aria-hidden="true"></span>
                            <!-- Active Icons -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                width="24" height="24">
                                <path fill-rule="evenodd"
                                    d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 00-.722-1.952l-3.285-3.832A3 3 0 0016.215 3h-8.43a3 3 0 00-2.278 1.048L2.222 7.88A3 3 0 001.5 9.832zM7.785 4.5a1.5 1.5 0 00-1.139.524L3.881 8.25h3.165a3 3 0 012.496 1.336l.164.246a1.5 1.5 0 001.248.668h2.092a1.5 1.5 0 001.248-.668l.164-.246a3 3 0 012.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 00-1.139-.524h-8.43z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 003 3h15a3 3 0 003-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 00-2.496 1.336l-.164.246a1.5 1.5 0 01-1.248.668h-2.092a1.5 1.5 0 01-1.248-.668l-.164-.246A3 3 0 007.046 15H2.812z" />
                            </svg>

                            <span class="ml-4">Newsletter</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                            href="{{ route('dashboard.newsletter.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                width="24" height="24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                            </svg>

                            <span class="ml-4">Newsletter</span>
                        </a>
                    @endif
                </li>


                </li>
            @endif


            {{-- Report Nav --}}
            @if (Auth::user()->hasRole('admin'))
                <li class="relative px-6 py-3">

                    @if (request()->is('dashboard/laporan') ||
                            request()->is('dashboard/laporan/*') ||
                            request()->is('dashboard/*/laporan') ||
                            request()->is('dashboard/*/laporan/*'))
                        <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                            href="{{ route('dashboard.laporan.index') }}">


                            <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                                aria-hidden="true"></span>
                            <!-- Active Icons -->
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABIklEQVRIie3VQSsFURQH8N+bJpFS2PkIL8qSZCcWvoNsrbGWndjbCEuU76Cs7CzICh9AUain9MJiZjT03rvTc9/Ov04z/c+c859z7r3n8o8AaqX3TSxGyvuGBTTSEnmM60gCr2hAWeAN95EE3tGXPw3iDJ+R7QGzsNaD5IVdpaiXStvBI0ax/udGUU/83EkFWnHdIIFD1co9woys4lW8VIyrJLDb4u+m0Ywh8ISRNi04CAkknRqY4zQXaYX9UHAVgbsOvtsYAv0dfAMxBKa69H0jtMgfbRIluAzEVlrkGvYw9iv5NiZDwWnogxzjuJHtqGfM51wlVD3JIdvCsGyOnRd8KrsHYmAFc7L2TeRcg+ya7NW4Pimm5hKWMRSpmiYusPEFEl++fmXudZkAAAAASUVORK5CYII=" />
                            <span class="ml-4">Report</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                            href="{{ route('dashboard.laporan.index') }}">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABhElEQVRIie3Vv0uVURzH8ddzewY1LGxNJIkbUUPQaEulgzSEtEVzWxFStERLLUGD4FpBguAWKP5Y3PwDooYiBCGjJUga4kmltOGcC0+32z2X7jP6gQOH76/3+R7ODw6UUFaaz6FeUd11XIe8ZJzGYEWAT41JA3AIW9itCPA91vyVYRgrGMJ2RYAebGI8wyx2cBN7FQFqeIG8hjNYRC8e4wludAnYwwLO5sJJ2u8g6TjG4nwVnxPx+7G215hIBN9GgbU4CtxK5EzE2knANXzDpZJtNNra5XUEyPAhdtCsO3jvz8v6F6DWZgVwGifxvIXvmXDzT7UrkAKcwEf8aOErom+4G8AO+tv4j0hczhTgDY4J29SsOgbwthvAV8zjUZM9i7ZXwhv23wCYxGW8FFZdxwwu4m4quRPAJi4IW/UujqMYUXqW/6U8FRC1gaul+J8tYmZxRTgY58qAAn0dgloVbugepoRT9QWHUeRYxkPhg6jqPziPB5jJhC7uC+31VATYxhKe/gY7CEzT+6WgsAAAAABJRU5ErkJggg==" />

                            <span class="ml-4">Report</span>
                        </a>
                    @endif


                </li>
            @endif

            {{-- Transaction Nav --}}
            <li class="relative px-6 py-3">

                @if (request()->is('dashboard/transaction') ||
                        request()->is('dashboard/transaction/*') ||
                        request()->is('dashboard/*/transaction') ||
                        request()->is('dashboard/*/transaction/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>

                    <a class="inline-flex items-center w-full text-sm font-medium transition-colors duration-150 hover:text-gray-800 "
                        href="{{ route('dashboard.transaction.index') }}">

                        <!-- Active Icons -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="2" width="18" height="20" rx="4"
                                fill="#082431" />
                            <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="white"
                                stroke-width="1.5" stroke-linecap="round" />
                            <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="white"
                                stroke-width="1.5" stroke-linecap="round" />
                            <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="white"
                                stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span class="ml-4">Transaction</span>

                    </a>
                @else
                    <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                        href="{{ route('dashboard.transaction.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="3.25" y="2.25" width="17.5" height="19.5" rx="4.75"
                                stroke="#082431" stroke-width="1.5" />
                            <line x1="7.75" y1="7.25" x2="10.25" y2="7.25" stroke="#082431"
                                stroke-width="1.5" stroke-linecap="round" />
                            <line x1="7.75" y1="11.25" x2="16.25" y2="11.25" stroke="#082431"
                                stroke-width="1.5" stroke-linecap="round" />
                            <line x1="7.75" y1="15.25" x2="16.25" y2="15.25" stroke="#082431"
                                stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span class="ml-4">Transaction</span>
                    </a>
                @endif
            </li>

            {{-- Logout Nav --}}
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" fill="white" />
                        <path
                            d="M15 7.5V7C15 4.79086 13.2091 3 11 3H7C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H11C13.2091 21 15 19.2091 15 17V16.5"
                            stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M18.5 9.5L20.8586 11.8586C20.9367 11.9367 20.9367 12.0633 20.8586 12.1414L18.5 14.5"
                            stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M9.5 12L20 12" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    <span class="ml-4">Logout</span>

                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>

                </a>
            </li>

            {{-- back --}}
            <li class="absolute px-6 py-3" style="bottom: 0;">
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="/">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>

                    <span class="ml-4">Back</span>
                </a>
            </li>
        </ul>

    </div>
</aside>
