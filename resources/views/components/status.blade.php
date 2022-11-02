@if ($status === 'pending')
    <div class="badge badge-warning">{{ __('messages.pending') }}</div>
@elseif ($status === 'canceled')
    <div class="badge badge-danger">{{ __('messages.canceled') }}</div>
@elseif ($status === 'paid')
    <div class="badge badge-info">{{ __('messages.paid') }}</div>
@elseif ($status === 'delivered')
    <div class="badge badge-success">{{ __('messages.delivered') }}</div>
@elseif ($status === 'delivering')
    <div class="badge badge-dark">{{ __('messages.delivering') }}</div>
@elseif ($status === 'confirmed')
    <div class="badge badge-primary">{{ __('messages.confirmed') }}</div>
@endif
