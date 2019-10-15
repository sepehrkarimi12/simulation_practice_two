<?php
    include('numbers.php');
?>
<html lang="en">
<head>
    <style>
        td
        {
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">
    <!-- توزیع مدت های بین دو ورود  -->
    <table width="500" dir="ltr" border="1">
        <tr><th colspan="4">توزیع مدت های بین دو ورود </th></tr>
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت های بین دو ورود</td>

        </tr>
        <tr>
            <td>001-125</td>
            <td>0.125</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>126-250</td>
            <td>0.250</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>251-375</td>
            <td>0.375</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>376-500</td>
            <td>0.500</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>501-625</td>
            <td>0.625</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>626-750</td>
            <td>0.750</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>751-875</td>
            <td>0.875</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>876-000</td>
            <td>1.000</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
    </table>
    <br/>
    <!-- توزیع مدت های خدمت دهی  -->
    <table width="500" dir="ltr" border="1">
        <tr><th colspan="4">توزیع مدت های خدمت دهی </th></tr>         
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت خدمت دهی</td>

        </tr>
        <tr>
            <td>01-10</td>
            <td>0.10</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>11-30</td>
            <td>0.30</td>
            <td>0.20</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>31-60</td>
            <td>0.60</td>
            <td>0.30</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>61-85</td>
            <td>0.85</td>
            <td>0.25</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>86-95</td>
            <td>0.95</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>96-00</td>
            <td>1.00</td>
            <td>0.05</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
    </table>
    <br/>
    <!-- تعیین مدت های بین دو ورود  -->
    <table width="600" dir="rtl" border="1">
        <tr><th colspan="6">تعیین مدت های بین دو ورود </th></tr>
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>

        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>11</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-2"><?= getOneToOneThousand($r); ?></td>
            <td>12</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-12"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-3"><?= getOneToOneThousand($r); ?></td>
            <td>13</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-13"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-4"><?= getOneToOneThousand($r); ?></td>
            <td>14</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-14"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-5"><?= getOneToOneThousand($r); ?></td>
            <td>15</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-15"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td id="m-6"><?= $r = rand(1, 1000); ?></td>
            <td><?= getOneToOneThousand($r); ?></td>
            <td>16</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-16"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-7"><?= getOneToOneThousand($r); ?></td>
            <td>17</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-17"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-8"><?= getOneToOneThousand($r); ?></td>
            <td>18</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-18"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-9"><?= getOneToOneThousand($r); ?></td>
            <td>19</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-19"><?= getOneToOneThousand($r); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-10"><?= getOneToOneThousand($r); ?></td>
            <td>20</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-20"><?= getOneToOneThousand($r); ?></td>
        </tr>
    </table>
    <br/>
    <!-- تعیین مدت های تولید شده برای خدمت دهی  -->
    <table width="600" dir="rtl" border="1">
        <tr><th colspan="6">تعیین مدت های تولید شده برای خدمت دهی </th></tr>
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-1"><?= getOneToOneHundred($t); ?></td>
            <td>11</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-11"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-2"><?= getOneToOneHundred($t); ?></td>
            <td>12</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-12"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-3"><?= getOneToOneHundred($t); ?></td>
            <td>13</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-13"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-4"><?= getOneToOneHundred($t); ?></td>
            <td>14</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-14"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-5"><?= getOneToOneHundred($t); ?></td>
            <td>15</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-15"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-6"><?= getOneToOneHundred($t); ?></td>
            <td>16</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-16"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-7"><?= getOneToOneHundred($t); ?></td>
            <td>17</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-17"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-8"><?= getOneToOneHundred($t); ?></td>
            <td>18</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-18"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-9"><?= getOneToOneHundred($t); ?></td>
            <td>19</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-19"><?= getOneToOneHundred($t); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-10"><?= getOneToOneHundred($t); ?></td>
            <td>20</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-20"><?= getOneToOneHundred($t); ?></td>
        </tr>
    </table>
    <br/>
    <!-- جدول شبیه سازی برای مسئله صف  -->
    <table width="1200" dir="rtl" border="1">
        <tr><th colspan="9">جدول شبیه سازی برای مسئله صف </th></tr>
        <tr>
            <td>مشتری</td>
            <td>مدت سپری شده از آخرین ورود</td>
            <td>زمان ورود</td>
            <td>مدت خدمت دهی</td>
            <td>زمان شروع خدمت</td>
            <td>مدت ماندن مشتری در صف</td>
            <td>زمان پایان خدمت</td>
            <td>مدت ماندن مشتری در سیستم</td>
            <td>مدت بیکاری خدمت دهنده</td>
        </tr>
        <tr>
            <td><?= $a=1; ?></td>
            <td><?= $b=0; ?></td>
            <td><?= $c=0; ?></td>
            <td><?= $d=4; ?></td>
            <td><?= $e=0; ?></td>
            <td><?= $f=0; ?></td>
            <td><?= $g=4; ?></td>
            <td><?= $h=4; ?></td>
            <td><?= $i=0; ?></td>
        </tr><tr>
            <td>2</td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="misaghi-1"><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="misaghi-2"><?php echo  "<script>document.writeln(document.getElementById('k-2').innerText);</script>";?></td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>3</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>4</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>6</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>7</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>8</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>9</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>11</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>12</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>

        <tr>
            <td>13</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>14</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>15</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>16</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>17</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>18</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>19</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>20</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
    </table>
</body>
</html>
