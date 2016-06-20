<!DOCTYPE html>
<head>
    <title>Translation to {$lang}</title>
</head>
<html>
<div style="text-align: center; width: 100%; height: 100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
    {if not isset($translations)}
        <h4>Language [{$lang}] requested not in translation system, should be one of [{', '|implode:$validLangs}]</h4>
    {else}
        <table id="translations" style="display: inline-table;">
            <thead>
            <tr style="background-color: darkgrey;">
                <th colspan="1">Welcome to the translation system</th>
            </tr>
            </thead>
            <tbody>
            {foreach key=original item=translation from=$translations}
                <tr>
                    <td><strong>{$original}</strong> translates to <strong>{$translation}</strong> in language: <strong>{$lang}</strong> </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    {/if}
</div>
</html>
</html>