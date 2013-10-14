Bootstrap
=========

ساده‌ترین و دقیق‌ترین راه فارسی سازی بوت استرپ

$res = str_replace(
  array(
    ': right', ': left', 'axxxxx',
    '-right', '-left', 'bxxxxx',
    ' right:', ' left:', 'cxxxxx'
  ),
  array(
    'axxxxx', ': right', ': left',
    'bxxxxx', '-right', '-left',
    'cxxxxx', ' right:', ' left:'
  ),
file_get_contents('bootstrap.css'));

file_put_contents('bootstrap-rtl.css',$res);
