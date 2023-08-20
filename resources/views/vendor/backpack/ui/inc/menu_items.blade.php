{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-dropdown title="مدیریت کاربران" icon="la la-group">
    <x-backpack::menu-dropdown-item title="کاربران" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="نقش‌ها" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="دسترسی‌ها" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-item title="تگ‌ها" icon="la la-tag" :link="backpack_url('tag')" />