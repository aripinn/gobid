This is admin dashboard

<p>This paragraph is visible to everyone that can access this page</p>

@can('admin')
    <p>This paragraph is only show to admin</p>
@endcan

@can('staff')
    <p>This paragraph is only show to staff</p>
@endcan