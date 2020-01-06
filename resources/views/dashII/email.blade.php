@extends('dash.index')
@section('title','::. Inbox Email')
@section('content')
<div class="page-content">
    <?php
        $countemail_unread=$email_unread->count();
        $email_count=$email->count();
    ?>
    <div class="row inbox-wrapper">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 email-aside border-lg-right">
                            <div class="aside-content">
                                <div class="aside-header">
                                    <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse"
                                        type="button"><span class="icon"><i
                                                data-feather="chevron-down"></i></span></button><span
                                        class="title">Bintang Tobing</span>
                                    <p class="description">hello@bintangtobing.com</p>
                                </div>
                                <div class="aside-compose"><a class="btn btn-primary btn-block" href="#">Compose
                                        Email</a></div>
                                <div class="aside-nav collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="/email"><span class="icon"><i
                                                        data-feather="inbox"></i></span>Inbox<span
                                                    class="badge badge-danger-muted text-white font-weight-bold
                                                    float-right"><?php $countemail_unread=$email_unread->count(); ?>{{$countemail_unread}}</span></a>
                                        </li>
                                        <li><a href="#"><span class="icon"><i data-feather="mail"></i></span>Sent
                                                Mail</a></li>
                                        <li><a href="#"><span class="icon"><i
                                                        data-feather="briefcase"></i></span>Important<span
                                                    class="badge badge-info-muted text-white font-weight-bold float-right">4</span></a>
                                        </li>
                                        <li><a href="#"><span class="icon"><i data-feather="file"></i></span>Drafts</a>
                                        </li>
                                        <li><a href="#"><span class="icon"><i data-feather="star"></i></span>Tags</a>
                                        </li>
                                        <li><a href="#"><span class="icon"><i data-feather="trash"></i></span>Trash</a>
                                        </li>
                                    </ul>
                                    <span class="title">Labels</span>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a href="#"><i data-feather="tag" class="text-warning"></i> Important </a>
                                        </li>
                                        <li><a href="#">
                                                <i data-feather="tag" class="text-primary"></i> Business </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i data-feather="tag" class="text-info"></i> Inspiration </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 email-content">
                            <div class="email-inbox-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="email-title mb-2 mb-md-0"><span class="icon"><i
                                                    data-feather="inbox"></i></span> Inbox <span
                                                class="new-messages">({{$countemail_unread}}
                                                new unread messages)</span> </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="email-search">
                                            <div class="input-group input-search">
                                                <input class="form-control" type="text"
                                                    placeholder="Search mail..."><span class="input-group-btn">
                                                    <button class="btn btn-outline-secondary" type="button"><i
                                                            data-feather="search"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-filters d-flex align-items-center justify-content-between flex-wrap">
                                <div class="email-filters-left flex-wrap d-none d-md-flex">
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                    <div class="btn-group ml-3">
                                        <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                            type="button"> With selected <span class="caret"></span></button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">Mark as read</a>
                                            <a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item"
                                                href="#">Spam</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1 mb-md-0">
                                        <button class="btn btn-outline-primary" type="button">Archive</button>
                                        <button class="btn btn-outline-primary" type="button">Span</button>
                                        <button class="btn btn-outline-primary" type="button">Delete</button>
                                    </div>
                                    <div class="btn-group mb-1 mb-md-0 d-none d-xl-block">
                                        <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                            type="button">Order by <span class="caret"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a class="dropdown-item" href="#">Date</a>
                                            <a class="dropdown-item" href="#">From</a>
                                            <a class="dropdown-item" href="#">Subject</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Size</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of
                                        253</span>
                                    <div class="btn-group email-pagination-nav">
                                        <button class="btn btn-outline-secondary btn-icon" type="button"><i
                                                data-feather="chevron-left"></i></button>
                                        <button class="btn btn-outline-secondary btn-icon" type="button"><i
                                                data-feather="chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="email-list">
                                @foreach ($email as $emaillist)
                                <div
                                    class="email-list-item @if($emaillist->status=='unread')email-list-item--unread @else @endif">
                                    <div class="email-list-actions">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </div>
                                    <a href="#" class="email-list-detail">
                                        <div>
                                            <span class="from">{{$emaillist->nama}}</span>
                                            <p class="msg">{{$emaillist->subject}}</p>
                                        </div>
                                        <span class="date">
                                            {{ Carbon\Carbon::parse($emaillist->created_at)->format('d M') }}
                                        </span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
