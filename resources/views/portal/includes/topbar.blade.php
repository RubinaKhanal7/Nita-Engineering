
<div id="top-bar" class="top-bar">
    <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
                <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">{{ $sitesetting->address }}</p>
                </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
                <li>
                  <a title="Facebook" href="{{ $sitesetting->facebook_link }}" target="_blank">
                      <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                  </a>
                  {{-- <a title="Twitter" href="{{ $sitesetting->twitter_link }}">
                      <span class="social-icon"><i class="fab fa-twitter"></i></span>
                  </a> --}}
                  <a title="Instagram" href="{{ $sitesetting->instagram_link }}" target="_blank">
                      <span class="social-icon"><i class="fab fa-instagram"></i></span>
                  </a>
                  {{-- <a title="Linkdin" href="{{ $sitesetting->github_link }}">
                      <span class="social-icon"><i class="fab fa-github"></i></span>
                  </a> --}}
                </li>
            </ul>
          </div>
          <!--/ Top social end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>