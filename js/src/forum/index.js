app.initializers.add('josecheng-duijiang', () => {
    app.extensionData.for('josecheng-duijiang')
        .registerSetting({
            setting: 'josecheng-duijiang.customButton',
            label: app.translator.trans('josecheng-duijiang.admin.settings.custom_button_label'),
            type: 'boolean',
        });
});
// 例如，如果需要处理点击事件
$('.custom-button').click(function() {
    // 处理点击事件的逻辑
});
