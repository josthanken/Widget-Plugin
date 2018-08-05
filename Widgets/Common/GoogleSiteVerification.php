{% set text = widget.settings.text.mobile %}

<div class="widget widget-text widget-{{ widget.settings.appearance.mobile | default('primary') }}">
    <div class="widget-inner">
        {% if text | trim is not empty %}
        {{ text | raw }}
        {% else %}
        <div class="placeholder-text">
            {{ trans("Ceres::Widget.textPlaceholder") }}
        </div>
        {% endif %}
    </div>
</div>
