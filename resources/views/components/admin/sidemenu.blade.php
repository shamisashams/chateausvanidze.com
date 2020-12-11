<div >
    <div style="position: relative; height:100%" class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link" style="height: 100%">
        <div class="logo-w">
          <a class="logo" href="index.html">
            <div class="logo-element"></div>
            <div class="logo-label">
              Clean Admin
            </div>
          </a>
        </div>

        <div class="element-search autosuggest-search-activator">
          <input placeholder="Start typing to search..." type="text">
        </div>
        <h1 class="menu-page-header">
          Page Header
        </h1>
        <ul class="main-menu">

          <li class="sub-header">
            <span>Options</span>
          </li>
          <li class=" has-sub-menu">
            <a href="apps_bank.html">
              <div class="icon-w">
                <div class="os-icon os-icon-package"></div>
              </div>
              <span>Applications</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Applications
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-package"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="apps_email.html">Email Application</a>
                  </li>
                  <li>
                    <a href="apps_support_dashboard.html">Support Dashboard</a>
                  </li>
                  <li>
                    <a href="apps_support_index.html">Tickets Index</a>
                  </li>
                  <li>
                    <a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="apps_projects.html">Projects List</a>
                  </li>
                  <li>
                    <a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a>
                  </li>
                  </ul><ul class="sub-menu">
                  <li>
                    <a href="apps_full_chat.html">Chat Application</a>
                  </li>
                  <li>
                    <a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_chat.html">Popup Chat</a>
                  </li>
                  <li>
                    <a href="apps_pipeline.html">CRM Pipeline</a>
                  </li>
                  <li>
                    <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_calendar.html">Calendar</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-file-text"></div>
              </div>
              <span>Pages</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Pages
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-file-text"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="misc_invoice.html">Invoice</a>
                  </li>
                  <li>
                    <a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="misc_charts.html">Charts</a>
                  </li>
                  <li>
                    <a href="auth_login.html">Login</a>
                  </li>
                  <li>
                    <a href="auth_register.html">Register</a>
                  </li>
                  </ul><ul class="sub-menu">
                  <li>
                    <a href="auth_lock.html">Lock Screen</a>
                  </li>
                  <li>
                    <a href="misc_pricing_plans.html">Pricing Plans</a>
                  </li>
                  <li>
                    <a href="misc_error_404.html">Error 404</a>
                  </li>
                  <li>
                    <a href="misc_error_500.html">Error 500</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-life-buoy"></div>
              </div>
              <span>UI Kit</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                UI Kit
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-life-buoy"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a>
                  </li>
                  <li>
                    <a href="uikit_alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="uikit_grid.html">Grid</a>
                  </li>
                  <li>
                    <a href="uikit_progress.html">Progress</a>
                  </li>
                  <li>
                    <a href="uikit_popovers.html">Popover</a>
                  </li>
                  </ul><ul class="sub-menu">
                  <li>
                    <a href="uikit_tooltips.html">Tooltips</a>
                  </li>
                  <li>
                    <a href="uikit_buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="uikit_dropdowns.html">Dropdowns</a>
                  </li>
                  <li>
                    <a href="uikit_typography.html">Typography</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
            <li class="">
                <a href="{{route('productIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.products')}}</span></a>
            </li>
            <li class="">
                <a href="{{route('localizationIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.localizations')}}</span></a>
            </li>

            <li class="">
                <a href="{{route('featureIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.features')}}</span></a>
            </li>
          <li class="sub-header">
            <span>Elements</span>
          </li>
          <li>
            <a href="/{{app()->getLocale()}}/admin/languages" target="_blank">
              <div class="icon-w">
                <div class="os-icon os-icon-flag"></div>
              </div>
              <span>@lang('language')</span></a>

          </li>
          <li>
            <a href="/{{app()->getLocale()}}/admin/answers" target="_blank">
              <div class="icon-w">
                <div class="os-icon os-icon-flag"></div>
              </div>
              <span>@lang('answers')</span></a>

          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-users"></div>
              </div>
              <span>Users</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Users
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-users"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="users_profile_big.html">Big Profile</a>
                  </li>
                  <li>
                    <a href="users_profile_small.html">Compact Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-edit-32"></div>
              </div>
              <span>Forms</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Forms
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-edit-32"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="forms_regular.html">Regular Forms</a>
                  </li>
                  <li>
                    <a href="forms_validation.html">Form Validation</a>
                  </li>
                  <li>
                    <a href="forms_wizard.html">Form Wizard</a>
                  </li>
                  <li>
                    <a href="forms_uploads.html">File Uploads</a>
                  </li>
                  <li>
                    <a href="forms_wisiwig.html">Wisiwig Editor</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-grid"></div>
              </div>
              <span>Tables</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Tables
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-grid"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="tables_regular.html">Regular Tables</a>
                  </li>
                  <li>
                    <a href="tables_datatables.html">Data Tables</a>
                  </li>
                  <li>
                    <a href="tables_editable.html">Editable Tables</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class=" has-sub-menu">
            <a href="#">
              <div class="icon-w">
                <div class="os-icon os-icon-zap"></div>
              </div>
              <span>Icons</span></a>
            <div class="sub-menu-w">
              <div class="sub-menu-header">
                Icons
              </div>
              <div class="sub-menu-icon">
                <i class="os-icon os-icon-zap"></i>
              </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li>
                    <a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_feather.html">Feather Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_themefy.html">Themefy Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_picons_thin.html">Picons Thin</a>
                  </li>
                  <li>
                    <a href="icon_fonts_dripicons.html">Dripicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_eightyshades.html">Eightyshades</a>
                  </li>
                  </ul><ul class="sub-menu">
                  <li>
                    <a href="icon_fonts_entypo.html">Entypo</a>
                  </li>
                  <li>
                    <a href="icon_fonts_font_awesome.html">Font Awesome</a>
                  </li>
                  <li>
                    <a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a>
                  </li>
                  <li>
                    <a href="icon_fonts_metrize_icons.html">Metrize Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_picons_social.html">Picons Social</a>
                  </li>
                  <li>
                    <a href="icon_fonts_batch_icons.html">Batch Icons</a>
                  </li>
                  </ul><ul class="sub-menu">
                  <li>
                    <a href="icon_fonts_dashicons.html">Dashicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_typicons.html">Typicons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_weather_icons.html">Weather Icons</a>
                  </li>
                  <li>
                    <a href="icon_fonts_light_admin.html">Light Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <div class="side-menu-magic" >
          <h4>
            Light Admin
          </h4>
          <p>
            Clean Bootstrap 4 Template
          </p>
          <div class="btn-w">
            <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
          </div>
        </div>
      </div>
</div>
