<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">{{ count(App\Models\Message::all()) }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                @php
                    use App\Models\Message;
                    $data = Message::all();
                @endphp
                @foreach ($data as $m)
                    <a href="mailto:{{ $m->email }}" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    {{ $m->name }}
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">{{ $m->message }}</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ $m->created_at }}</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                @endforeach
                <div class="dropdown-divider"></div>
                <a href="{{ route('message') }}" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span
                    class="badge badge-warning navbar-badge">{{ App\Models\Message::count() + App\Models\Order::count() + App\Models\Testimonial::count() + App\Models\Comment::count() }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span
                    class="dropdown-item dropdown-header">{{ App\Models\Message::count() + App\Models\Order::count() + App\Models\Testimonial::count() + App\Models\Comment::count() }}
                    Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="{{ route('message') }}" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> {{ count(App\Models\Message::all()) }} new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('order') }}" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> {{ count(App\Models\Order::all()) }} order requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('testimonial') }}" class="dropdown-item">
                    <i class="fas fa-star mr-2"></i> {{ count(App\Models\Testimonial::all()) }} Testimonials Rate
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('comment') }}" class="dropdown-item">
                    <i class="fas fa-comments mr-2"></i> {{ count(App\Models\Comment::all()) }} Comments
                    <span class="float-right text-muted text-sm">few seconds</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    @if (App::getLocale() == 'ar')
                        {{ LaravelLocalization::getCurrentLocaleName() }}
                    @else
                        {{ LaravelLocalization::getCurrentLocaleName() }}
                    @endif
                </a>

                <div class="dropdown-menu">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
