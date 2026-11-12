<?php
function getMainNavItems()
{

    return array(
        'HTML5 / CSS3' => 'html',
        'PHP' => array(
            'PHP' => 'php',
            'Laravel' => 'laravel',
        ),
        'JavaScript' => array(
            'JavaScript' => 'js',
            'AJAX' => 'ajax',
            'jQuery' => 'jquery',
            'TypeScript' => 'ts',
            'React' => 'react',
        ),
        'XML' => 'xml',
        'Tools' => 'tools',
        'Tipps & Hilfe' => 'help'
    );
}

function getCourseFiles($courseName)
{
    $currentPath = "downloads/$courseName";
    if (!is_dir($currentPath)) return false;
    $fileArray = array($currentPath => NULL);
    foreach (scandir($currentPath) as $file) {
        if ($file === '..' || $file === '.') continue;
        $fileSize = filesize("$currentPath/$file");
        if ($fileSize >= 1000000000) {
            $fileSize = number_format((filesize("$currentPath/$file") / 1024 / 1024 / 1024), 2, ',', '.') . ' GiB';
        } elseif ($fileSize >= 1000000) {
            $fileSize = number_format((filesize("$currentPath/$file") / 1024 / 1024), 2, ',', '.') . ' MiB';
        } elseif ($fileSize >= 1000) {
            $fileSize = number_format((filesize("$currentPath/$file") / 1024), 2, ',', '.') . ' KiB';
        } else {
            $fileSize = number_format((filesize("$currentPath/$file")), 2, ',', '.') . ' B';
        }
        $fileArray[$currentPath][] = array(
            'file' => $file,
            'fileSize' => $fileSize,
            'changeTime' => date('d.m.Y H:i:s', filemtime("$currentPath/$file"))
        );
    }
    return $fileArray;
}

function loadSnippetsFile($file)
{
    if (file_exists($file)) {
        $fileContent = file_get_contents($file);
    } else {
        return false;
    }

    $search = array(
        '>',
        '<'
    );
    $replace = array(
        '&gt;',
        '&lt;'
    );
    return str_replace($search, $replace, $fileContent);
}

function printCopyToClipboardButton($code, $idLang, $codeLang)
{
    ob_start();
?>

    <div class="bd-code-snippet">
        <div class="bd-clipboard">
            <button type="button" class="btn-clipboard">
                <svg class="bi">
                    <use xlink:href="#clipboard"></use>
                </svg>
            </button>
        </div>
        <div class="highlight">
            <pre class="language-<?= $codeLang; ?>"><code id="<?=  $idLang; ?>" class="language-<?= $codeLang ?>"><?= $code ?></code></pre>
        </div>
    </div>

<?php
    return ob_get_clean();
}
