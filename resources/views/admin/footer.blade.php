<!-- Main Footer -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
      <span>{{ trans('app.today_is') . ' ' . date('l M-j, Y') }}</span>
  </div>

  <!-- Default to the left -->
  <strong>Copyright &copy; {{ date('Y') }} {{ config('system_settings.name') ?? config('app.name') }}.</strong> All rights reserved.
</footer>
