<div >
    <div style="position: relative; height:100%" class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link" style="height: 100%">
        <div class="logo-w">
          <a class="logo" href="{{route('productIndex',app()->getLocale())}}">
            <div class="logo-element"></div>
            <div class="logo-label">
              Chateau Svanidze
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
            <li>
              <a href="/{{app()->getLocale()}}/admin/languages" >
                <div class="icon-w">
                  <div class="os-icon os-icon-flag"></div>
                </div>
                <span>@lang('admin.language')</span></a>
  
            </li>
            <li>
              <a href="/{{app()->getLocale()}}/admin/answers">
                <div class="icon-w">
                  <div class="os-icon os-icon-flag"></div>
                </div>
                <span>@lang('admin.answers')</span></a>
  
            </li>
            <li>
              <a href="/{{app()->getLocale()}}/admin/news">
                <div class="icon-w">
                  <div class="os-icon os-icon-flag"></div>
                </div>
                <span>@lang('admin.news')</span></a>
  
            </li>
            <li>
              <a href="/{{app()->getLocale()}}/admin/files">
                <div class="icon-w">
                  <div class="os-icon os-icon-flag"></div>
                </div>
                <span>@lang('admin.files')</span></a>
  
            </li>
            <li class="">
                <a href="{{route('userIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.users')}}</span></a>
            </li>
            <li class="">
                <a href="{{route('pageIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.pages')}}</span></a>
            </li>
            <li class="">
                <a href="{{route('settingIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.settings')}}</span></a>
            </li>
            <li>
         

       
      
        </ul>
      </div>
</div>
