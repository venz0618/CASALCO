<!-- BEGIN NAVIGATION -->
<div class="header-navigation pull-right font-transform-inherit">
  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
      <a href="/">
        Home
      </a>
    </li>
    <li class="{{ (request()->is('about-us')) ? 'active' : '' }}">
      <a href="about-us">
        About Us
      </a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Loan</a>
      <ul class="dropdown-menu">
        <li><a href="/LAD-loans-information">(LAD) Loan Against Deposit</a></li>
        <li><a href="/regular-loans-information">Regular Loan</a></li>
        <li><a href="/express-loans-information">Express Loan</a></li>
        <li><a href="/special-loans-information">Special Loan</a></li>
      </ul>
    </li>

    <li>
        <a href="/contact-us">Contact Us</a>
    </li>

    {{-- <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Services</a>
      <ul class="dropdown-menu">
        <li><a href="portfolio-4.html">Regular & Special Loan Application Form</a></li>
        <li><a href="/express-loan-application-form" target="_blank">LAD & Express Loan Application Form</a></li>
      </ul>
    </li> --}}

    <li class="{{ (request()->is('membership-information')) ? 'active' : '' }}">
      <a href="membership-information">Membership</a>
    </li>
  </ul>
</div>
<!-- END NAVIGATION -->
