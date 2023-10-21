@extends('pages.settings.ajaxwrapper')
@section('settings-page')
<!--settings-->
<form class="form">

    <h5>{{ cleanLang(__('lang.kanban_board_settings')) }}</h5>
    <div class="line"></div>

    <div class="p-b-20">{{ cleanLang(__('lang.kanban_card_front_settings_info')) }}.</div>


    <!--show value-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.lead_value')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_value" name="settings_leads_kanban_value"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_value'] ?? '') }}>
            <label for="settings_leads_kanban_value"></label>
        </div>
    </div>
    <!--show date created-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.date_created')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_date_created" name="settings_leads_kanban_date_created"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_date_created'] ?? '') }}>
            <label for="settings_leads_kanban_date_created"></label>
        </div>
    </div>

    <!--show category-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.category')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_category" name="settings_leads_kanban_category"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_category'] ?? '') }}>
            <label for="settings_leads_kanban_category"></label>
        </div>
    </div>
    <!--show last contacted-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.date_last_contacted')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_date_contacted" name="settings_leads_kanban_date_contacted"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_date_contacted'] ?? '') }}>
            <label for="settings_leads_kanban_date_contacted"></label>
        </div>
    </div>
    <!--tags-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">@lang('lang.tags')</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_tags" name="settings_leads_kanban_tags"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_tags'] ?? '') }}>
            <label for="settings_leads_kanban_tags"></label>
        </div>
    </div>
    <!--reminder-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">@lang('lang.reminder')</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_reminder" name="settings_leads_kanban_reminder"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_reminder'] ?? '') }}>
            <label for="settings_leads_kanban_reminder"></label>
        </div>
    </div>
    <!--show telephone-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.telephone')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_telephone" name="settings_leads_kanban_telephone"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_telephone'] ?? '') }}>
            <label for="settings_leads_kanban_telephone"></label>
        </div>
    </div>
    <!--show email-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.email_address')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_email" name="settings_leads_kanban_email"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_email'] ?? '') }}>
            <label for="settings_leads_kanban_email"></label>
        </div>
    </div>
    <!--show Source-->
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label">{{ cleanLang(__('lang.lead_source')) }}</label>
        <div class="col-8 p-t-5">
            <input type="checkbox" id="settings_leads_kanban_source" name="settings_leads_kanban_source"
                class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_leads_kanban_source'] ?? '') }}>
            <label for="settings_leads_kanban_source"></label>
        </div>
    </div>

    @if(config('system.settings_type') == 'standalone')
    <!--[standalone] - settings documentation help-->
    <div>
        <a href="https://servidorseguro.mysuite1.com.br/client/login.php?sl=eqs" target="_blank"
            class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i>
            {{ cleanLang(__('lang.help_documentation')) }}</a>
    </div>
    @endif

    <!--buttons-->
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
            data-url="/settings/leads/general" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable">{{ cleanLang(__('lang.save_changes')) }}</button>
    </div>
</form>
@endsection