<footer class="bd-footer py-5 mt-5 bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                  <svg src="icons/bootstrap-white-fill.svg"></svg>
                    <span class="fs-5">Bootstrap</span>
                </a>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/{{ .Site.Params.docs_version }}/about/team/">Bootstrap team</a> with the help of <a href="{{ .Site.Params.repo }}/graphs/contributors">our contributors</a>.</li>
                    <li class="mb-2">Code licensed <a href="{{ .Site.Params.repo }}/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                    <li class="mb-2">Currently v{{ .Site.Params.current_version }}.</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Home</a></li>
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/">Docs</a></li>
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/examples/">Examples</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.themes }}">Themes</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.blog }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Guides</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/getting-started/">Getting started</a></li>
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/examples/starter-template/">Starter template</a></li>
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/getting-started/webpack/">Webpack</a></li>
                    <li class="mb-2"><a href="/docs/{{ .Site.Params.docs_version }}/getting-started/parcel/">Parcel</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Projects</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/bootstrap">Bootstrap 5</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/icons">Icons</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/rfs">RFS</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/bootstrap-npm-starter">npm starter</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
                <h5>Community</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/bootstrap/issues">Issues</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.github_org }}/bootstrap/discussions">Discussions</a></li>
                    <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.opencollective }}">Open Collective</a></li>
                    <li class="mb-2"><a href="{{ .Site.Params.slack }}">Slack</a></li>
                    <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">Stack Overflow</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>