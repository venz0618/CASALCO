<!-- BEGIN NAVIGATION -->
<div class="header-navigation pull-right font-transform-inherit">
  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
      <a href="/">Home</a>
    </li>
    <li class="{{ (request()->is('about-us')) ? 'active' : '' }}">
      <a href="about-us">About Us</a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Products</a>
      <ul class="dropdown-menu">
        <li class="{{ (request()->is('LAD-loans-information')) ? 'active' : '' }}">
            <a href="/LAD-loans-information">&#40;LAD&#41; Loan Against Deposit</a>
        </li>
        <li class="{{ (request()->is('regular-loans-information')) ? 'active' : '' }}">
            <a href="/regular-loans-information">Regular Loan</a>
        </li>
        <li class="{{ (request()->is('express-loans-information')) ? 'active' : '' }}">
            <a href="/express-loans-information">Express Loan</a>
        </li>
        <li class="{{ (request()->is('special-loans-information')) ? 'active' : '' }}">
            <a href="/special-loans-information">Special Loan</a>
        </li>
      </ul>
    </li>

    <li class="{{ (request()->is('contact-us')) ? 'active' : '' }}">
        <a href="contact-us">Contact Us</a>
    </li>

    {{-- <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Services</a>
      <ul class="dropdown-menu">
        <li><a href="portfolio-4.html">Regular & Special Loan Application Form</a></li>
        <li><a href="/express-loan-application-form" target="_blank">LAD & Express Loan Application Form</a></li>
      </ul>
    </li> --}}

    {{-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">Services</a>
        <ul class="dropdown-menu">
            <li class="{{ (request()->is('membership-information')) ? 'active' : '' }}">
                <a href="membership-information">Online Membership</a>
            </li>
            <li class="{{ (request()->is('loan-application-form')) ? 'active' : '' }}">
                <a href="loan-application-form">Apply for Loan</a>
            </li>
        </ul>
    </li> --}}

    <li class="{{ (request()->is('membership-information')) ? 'active' : '' }}">
      <a href="membership-information">Membership</a>
    </li>
  </ul>
</div>
<!-- END NAVIGATION -->
