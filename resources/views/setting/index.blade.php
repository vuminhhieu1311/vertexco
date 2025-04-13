@extends('layouts.admin')

@section('css')
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => 'Thiết lập'
    ])

    <div class="container-fluid my-10">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-5">
                                <label class="form-label" for="title">Tiêu đề website</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $setting?->title) }}"
                                    placeholder="Nhập tiêu đề website">
                            </div>

                            <div class="form-group mb-5">
                                <label class="form-label" for="favicon">Favicon</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="favicon" name="favicon" accept="image/*">
                                </div>
                                @if($setting?->favicon)
                                    <div class="mt-2">
                                        <img src="{{ asset($setting?->favicon) }}" alt="Current Favicon" style="max-width: 32px;">
                                    </div>
                                @endif
                            </div>

                            <div class="form-group mb-5">
                                <label class="form-label" for="google_verification_code">Google Verification Code</label>
                                <textarea type="text" class="form-control" id="google_verification_code" name="google_verification_code"
                                    placeholder="Nhập mã xác minh Google" rows="3">{{ old('google_verification_code', $setting?->google_verification_code) }}</textarea>
                                <small class="form-text text-muted">Dán mã xác minh từ Google Search Console vào đây</small>
                            </div>

                            <div class="form-group mb-5">
                                <label class="form-label" for="google_analytics">Google Analytics (GA4)</label>
                                <input type="text" class="form-control" id="google_analytics" name="google_analytics"
                                    value="{{ old('google_analytics', $setting?->google_analytics) }}"
                                    placeholder="Ví dụ: G-XXXXXXXXXX">
                                <small class="form-text text-muted">Nhập Measurement ID từ Google Analytics 4</small>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
