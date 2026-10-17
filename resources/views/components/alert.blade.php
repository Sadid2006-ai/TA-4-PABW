@props(['type' => 'success'])

<div style="padding:12px 16px; border-radius:6px; margin-bottom:16px;
    background: {{ $type === 'success' ? '#d4edda' : '#f8d7da' }};
    color: {{ $type === 'success' ? '#155724' : '#721c24' }};">
    {{ $slot }}
</div>