<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/in/irvan-sindy-008020194/" target="_blank">{{ __('Linkedin') }}</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/irvn.sndy/" target="_blank">{{ __('Instagram') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-heart heart"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.linkedin.com/in/irvan-sindy-008020194/" target="_blank">{{ __('Irvan Muhammad Sindy') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>