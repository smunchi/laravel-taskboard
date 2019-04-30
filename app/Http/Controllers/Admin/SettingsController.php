<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getAdminSetting()
    {
        $data['adm_setting'] = allsetting(array('todo_label', 'inprogress_label', 'done_label'));
        return view('admin.settings.admin_settings', $data);
    }

    public function saveAdminSettings(Request $request)
    {
        $settings = $request->except('_token');

        if(count($settings)) {
            foreach ($settings as $slug => $value) {
                AdminSetting::updateOrCreate(['slug' => $slug], ['slug' => $slug, 'value' => $value]);
            }
        }

        return redirect()->back()->with('success', __('Setting has been updated successfully.'));
    }
}
