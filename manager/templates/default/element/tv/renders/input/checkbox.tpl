<div id="tv{$tv->id}-cb"></div>

<script>
// <![CDATA[
{literal}
Ext.onReady(function() {
    const fld = MODx.load({
    {/literal}
        xtype: 'checkboxgroup',
        id: 'tv{$tv->id}',
        itemId: 'tv{$tv->id}',
        vertical: true,
        columns: {if $params.columns|default}{$params.columns|default}{else}1{/if},
        renderTo: 'tv{$tv->id}-cb',
        name: 'tv-{$tv->id}',
        width: '99%',
        allowBlank: {if $params.allowBlank == 1 || $params.allowBlank == 'true'}true{else}false{/if},
        hideMode: 'offsets',
        msgTarget: 'under',
        items: [{foreach from=$opts item=item key=k name=cbs}
        {literal}{{/literal}
            name: 'tv{$tv->id}[]',
            id: 'tv{$tv->id}-{$k}',
            {if $params.displayAsSwitch == 1 || $params.displayAsSwitch == 'true'}ctCls: 'display-switch',{/if}
            boxLabel: '{$item.text|escape:"javascript"}',
            checked: {if $item.checked}true{else}false{/if},
            inputValue: {$item.value},
            value: {$item.value}
        {literal}}{/literal}{if NOT $smarty.foreach.cbs.last},{/if}
        {/foreach}]
    {literal}}{/literal});
    {foreach from=$opts item=item key=k name=cbs}
    Ext.getCmp('tv{$tv->id}-{$k}').on('check',MODx.fireResourceFormChange);
    {/foreach}

    Ext.get('tvdef{$tv->id}').dom.value = "{$cbdefaults}";
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});
// ]]>
</script>
