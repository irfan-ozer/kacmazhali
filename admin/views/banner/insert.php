
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Yeni Kayıt Ekle</div>
                <div class="panel-body">


                    <?php echo bsFormText('title', 'Başlık') ?>
                    <?php echo bsFormImage('image', 'Resim') ?>
                    <?php echo bsFormTextarea('text', 'Yazı') ?>
                    <div class="help-block">Yazı girişi yapıyorsanız eğer tasarımın güzel gözükmesi açısından 'Başlık' alanının da doldurulmasını tavsiye ederiz.</div>
                    <?php echo bsFormText('link', 'Bağlantı') ?>
                    <?php echo bsFormDropdown('transition', 'Geçiş Animasyonu', array(
                        'value' => set_value('transition', 'transition2d: 1'),
                        'options' => array(
                            'transition2d: 1' => 'Sliding from right',
                            'transition2d: 2' => 'Sliding from left',
                            'transition2d: 3' => 'Sliding from bottom',
                            'transition2d: 4' => 'Sliding from top',
                            'transition2d: 5' => 'Crossfading',
                            'transition2d: 6' => 'Fading tiles forward',
                            'transition2d: 7' => 'Fading tiles reverse',
                            'transition2d: 8' => 'Fading tiles col-forward',
                            'transition2d: 9' => 'Fading tiles col-reverse',
                            'transition2d: 10' => 'Fading tiles (random)',
                            'transition2d: 11' => 'Smooth fading from right',
                            'transition2d: 12' => 'Smooth fading from left',
                            'transition2d: 13' => 'Smooth fading from bottom',
                            'transition2d: 14' => 'Smooth fading from top',
                            'transition2d: 15' => 'Smooth sliding from right',
                            'transition2d: 16' => 'Smooth sliding from left',
                            'transition2d: 17' => 'Smooth sliging from bottom',
                            'transition2d: 18' => 'Smooth sliding from top',
                            'transition2d: 19' => 'Sliding tiles to right (random)',
                            'transition2d: 20' => 'Sliding tiles to left (random)',
                            'transition2d: 21' => 'Sliding tiles to bottom (random)',
                            'transition2d: 22' => 'Sliding tiles to top (random)',
                            'transition2d: 23' => 'Sliding random tiles to random directions',
                            'transition2d: 24' => 'Sliding rows to right (forward)',
                            'transition2d: 25' => 'Sliding rows to right (reverse)',
                            'transition2d: 26' => 'Sliding rows to right (random)',
                            'transition2d: 27' => 'Sliding rows to left (forward)',
                            'transition2d: 28' => 'Sliding rows to left (reverse)',
                            'transition2d: 29' => 'Sliding rows to left (random)',
                            'transition2d: 30' => 'Sliding rows from top to bottom (forward)',
                            'transition2d: 31' => 'Sliding rows from top to bottom (random)',
                            'transition2d: 32' => 'Sliding rows from bottom to top (reverse)',
                            'transition2d: 33' => 'Sliding rows from bottom to top (random)',
                            'transition2d: 34' => 'Sliding columns to bottom (forward)',
                            'transition2d: 35' => 'Sliding columns to bottom (reverse)',
                            'transition2d: 36' => 'Sliding columns to bottom (random)',
                            'transition2d: 37' => 'Sliding columns to top (forward)',
                            'transition2d: 38' => 'Sliding columns to top (reverse)',
                            'transition2d: 39' => 'Sliding columns to top (random)',
                            'transition2d: 40' => 'Sliding columns from left to right (forward)',
                            'transition2d: 41' => 'Sliding columns from left to right (random)',
                            'transition2d: 42' => 'Sliding columns from right to left (reverse)',
                            'transition2d: 43' => 'Sliding columns from right to left (random)',
                            'transition2d: 44' => 'Fading and sliding tiles to right (random)',
                            'transition2d: 45' => 'Fading and sliding tiles to left (random)',
                            'transition2d: 46' => 'Fading and sliding tiles to bottom (random)',
                            'transition2d: 47' => 'Fading and sliding tiles to top (random)',
                            'transition2d: 48' => 'Fading and sliding random tiles to random directions',
                            'transition2d: 49' => 'Fading and sliding tiles from top-left (forward)',
                            'transition2d: 50' => 'Fading and sliding tiles from bottom-right (reverse)',
                            'transition2d: 51' => 'Fading and sliding tiles from top-right (random)',
                            'transition2d: 52' => 'Fading and sliding tiles from bottom-left (random)',
                            'transition2d: 53' => 'Fading and sliding rows to right (forward)',
                            'transition2d: 54' => 'Fading and sliding rows to right (reverse)',
                            'transition2d: 55' => 'Fading and sliding rows to right (random)',
                            'transition2d: 56' => 'Fading and sliding rows to left (forward)',
                            'transition2d: 57' => 'Fading and sliding rows to left (reverse)',
                            'transition2d: 58' => 'Fading and sliding rows to left (random)',
                            'transition2d: 59' => 'Fading and sliding rows from top to bottom (forward)',
                            'transition2d: 60' => 'Fading and sliding rows from top to bottom (random)',
                            'transition2d: 61' => 'Fading and sliding rows from bottom to top (reverse)',
                            'transition2d: 62' => 'Fading and sliding rows from bottom to top (random)',
                            'transition2d: 63' => 'Fading and sliding columns to bottom (forward)',
                            'transition2d: 64' => 'Fading and sliding columns to bottom (reverse)',
                            'transition2d: 65' => 'Fading and sliding columns to bottom (random)',
                            'transition2d: 66' => 'Fading and sliding columns to top (forward)',
                            'transition2d: 67' => 'Fading and sliding columns to top (reverse)',
                            'transition2d: 68' => 'Fading and sliding columns to top (random)',
                            'transition2d: 69' => 'Fading and sliding columns from left to right (forward)',
                            'transition2d: 70' => 'Fading and sliding columns from left to right (random)',
                            'transition2d: 71' => 'Fading and sliding columns from right to left (reverse)',
                            'transition2d: 72' => 'Fading and sliding columns from right to left (random)',
                            'transition2d: 73' => 'Carousel',
                            'transition2d: 74' => 'Carousel rows',
                            'transition2d: 75' => 'Carousel cols',
                            'transition2d: 76' => 'Carousel tiles horizontal',
                            'transition2d: 77' => 'Carousel tiles vertical',
                            'transition2d: 78' => 'Carousel-mirror tiles horizontal',
                            'transition2d: 79' => 'Carousel-mirror tiles vertical',
                            'transition2d: 80' => 'Carousel mirror rows',
                            'transition2d: 81' => 'Carousel mirror cols',
                            'transition2d: 82' => 'Turning tile from left',
                            'transition2d: 83' => 'Turning tile from right',
                            'transition2d: 84' => 'Turning tile from top',
                            'transition2d: 85' => 'Turning tile from bottom',
                            'transition2d: 86' => 'Turning tiles from left',
                            'transition2d: 87' => 'Turning tiles from right',
                            'transition2d: 88' => 'Turning tiles from top',
                            'transition2d: 89' => 'Turning tiles from bottom',
                            'transition2d: 90' => 'Turning rows from top',
                            'transition2d: 91' => 'Turning rows from bottom',
                            'transition2d: 92' => 'Turning cols from left',
                            'transition2d: 93' => 'Turning cols from right',
                            'transition2d: 94' => 'Flying rows from left',
                            'transition2d: 95' => 'Flying rows from right',
                            'transition2d: 96' => 'Flying cols from top',
                            'transition2d: 97' => 'Flying cols from bottom',
                            'transition2d: 98' => 'Flying and rotating tile from left',
                            'transition2d: 99' => 'Flying and rotating tile from right',
                            'transition2d: 100' => 'Flying and rotating tiles from left',
                            'transition2d: 101' => 'Flying and rotating tiles from right',
                            'transition2d: 102' => 'Flying and rotating tiles from random',
                            'transition2d: 103' => 'Scaling tile in',
                            'transition2d: 104' => 'Scaling tile from out',
                            'transition2d: 105' => 'Scaling tiles random',
                            'transition2d: 106' => 'Scaling tiles from out random',
                            'transition2d: 107' => 'Scaling in and rotating tiles random',
                            'transition2d: 108' => 'Scaling and rotating tiles from out random',
                            'transition2d: 109' => 'Mirror-sliding tiles diagonal',
                            'transition2d: 110' => 'Mirror-sliding rows horizontal',
                            'transition2d: 111' => 'Mirror-sliding rows vertical',
                            'transition2d: 112' => 'Mirror-sliding cols horizontal',
                            'transition2d: 113' => 'Mirror-sliding cols vertical',
                            'transition3d: 1' => '3D Spinning tile to right (180°)',
                            'transition3d: 2' => '3D Spinning tile to left (180°)',
                            'transition3d: 3' => '3D Spinning tile to bottom (180°)',
                            'transition3d: 4' => '3D Spinning tile to top (180°)',
                            'transition3d: 5' => '3D Spinning tiles to right (180°)',
                            'transition3d: 6' => '3D Spinning tiles to left (180°)',
                            'transition3d: 7' => '3D Spinning tiles to bottom (180°)',
                            'transition3d: 8' => '3D Spinning tiles to top (180°)',
                            'transition3d: 9' => '3D Horizontal spinning tiles random (180°)',
                            'transition3d: 10' => '3D Vertical spinning tiles random (180°)',
                            'transition3d: 11' => '3D Scaling and spinning tiles to right (180°)',
                            'transition3d: 12' => '3D Scaling and spinning tiles to left (180°)',
                            'transition3d: 13' => '3D Scaling and spinning tiles to bottom (180°)',
                            'transition3d: 14' => '3D Scaling and spinning tiles to top (180°)',
                            'transition3d: 15' => '3D Scaling and horizontal spinning tiles random (180°)',
                            'transition3d: 16' => '3D Scaling and vertical spinning tiles random (180°)',
                            'transition3d: 17' => '3D Spinning rows to right (180°)',
                            'transition3d: 18' => '3D Spinning rows to left (180°)',
                            'transition3d: 19' => '3D Spinning rows to bottom (180°)',
                            'transition3d: 20' => '3D Spinning rows to top (180°)',
                            'transition3d: 21' => '3D Horizontal spinning rows random (180°)',
                            'transition3d: 22' => '3D Vertical spinning rows random (180°)',
                            'transition3d: 23' => '3D Vertical spinning rows random (540°)',
                            'transition3d: 24' => '3D Scaling and spinning rows to right (180°)',
                            'transition3d: 25' => '3D Scaling and spinning rows to left (180°)',
                            'transition3d: 26' => '3D Scaling and spinning rows to bottom (180°)',
                            'transition3d: 27' => '3D Scaling and spinning rows to top (180°)',
                            'transition3d: 28' => '3D Scaling and horizontal spinning rows random (180°)',
                            'transition3d: 29' => '3D Scaling and vertical spinning rows random (180°)',
                            'transition3d: 30' => '3D Spinning columns to right (180°)',
                            'transition3d: 31' => '3D Spinning columns to left (180°)',
                            'transition3d: 32' => '3D Spinning columns to bottom (180°)',
                            'transition3d: 33' => '3D Spinning columns to top (180°)',
                            'transition3d: 34' => '3D Horizontal spinning columns random (180°)',
                            'transition3d: 35' => '3D Vertical spinning columns random (180°)',
                            'transition3d: 36' => '3D Horizontal spinning columns random (540°)',
                            'transition3d: 37' => '3D Scaling and spinning columns to right (180°)',
                            'transition3d: 38' => '3D Scaling and spinning columns to left (180°)',
                            'transition3d: 39' => '3D Scaling and spinning columns to bottom (180°)',
                            'transition3d: 40' => '3D Scaling and spinning columns to top (180°)',
                            'transition3d: 41' => '3D Scaling and horizontal spinning columns random (180°)',
                            'transition3d: 42' => '3D Scaling and vertical spinning columns random (180°)',
                            'transition3d: 43' => '3D Drunk colums scaling and spinning to right (180°)',
                            'transition3d: 44' => '3D Drunk colums scaling and spinning to left (180°)',
                            'transition3d: 45' => '3D Turning cuboid to right (90°)',
                            'transition3d: 46' => '3D Turning cuboid to left (90°)',
                            'transition3d: 47' => '3D Turning cuboid to bottom (90°))',
                            'transition3d: 48' => '3D Turning cuboid to top (90°)',
                            'transition3d: 49' => '3D Scaling and turning cuboid to right (90°)',
                            'transition3d: 50' => '3D Scaling and turning cuboid to left (90°)',
                            'transition3d: 51' => '3D Scaling and turning cuboids to right (90°)',
                            'transition3d: 52' => '3D Scaling and turning cuboids to left (90°)',
                            'transition3d: 53' => '3D Scaling and turning cuboids to bottom (90°)',
                            'transition3d: 54' => '3D Scaling and turning cuboids to top (90°)',
                            'transition3d: 55' => '3D Scaling and horizontal turning cuboids random (90°)',
                            'transition3d: 56' => '3D Scaling and vertical turning cuboids random (90°)',
                            'transition3d: 57' => '3D Turning rows to right (90°)',
                            'transition3d: 58' => '3D Turning rows to left (90°)',
                            'transition3d: 59' => '3D Horizontal turning rows random (90°)',
                            'transition3d: 60' => '3D Scaling and turning rows to right (90°)',
                            'transition3d: 61' => '3D Scaling and turning rows to left (90°)',
                            'transition3d: 62' => '3D Scaling and turning rows to bottom (90°)',
                            'transition3d: 63' => '3D Scaling and turning rows to top (90°)',
                            'transition3d: 64' => '3D Scaling and horizontal turning rows random (90°)',
                            'transition3d: 65' => '3D Scaling and vertical turning rows random (90°)',
                            'transition3d: 66' => '3D Scaling and horizontal turning drunk rows to right (90°)',
                            'transition3d: 67' => '3D Scaling and horizontal turning drunk rows to left (90°)',
                            'transition3d: 68' => '3D Turning columns to bottom (90°)',
                            'transition3d: 69' => '3D Turning columns to top (90°)',
                            'transition3d: 70' => '3D Vertical turning columns random (90°)',
                            'transition3d: 71' => '3D Scaling and turning columns to bottom (90°)',
                            'transition3d: 72' => '3D Scaling and turning columns to top (90°)',
                            'transition3d: 73' => '3D Scaling and turning columns to right (90°)',
                            'transition3d: 74' => '3D Scaling and turning columns to left (90°)',
                            'transition3d: 75' => '3D Scaling and horizontal turning columns random (90°)',
                            'transition3d: 76' => '3D Scaling and vertical turning columns random (90°)',
                            'transition3d: 77' => '3D Scaling and vertical turning drunk columns to right (90°)',
                            'transition3d: 78' => '3D Scaling and vertical turning drunk columns to left (90°)',
                            'transition3d: 79' => '3D Spinning cuboid to right (180°, large depth)',
                            'transition3d: 80' => '3D Spinning cuboid to left (180°, large depth)',
                            'transition3d: 81' => '3D Spinning cuboid to bottom (180°, large depth)',
                            'transition3d: 82' => '3D Spinning cuboid to top (180°, large depth)',
                            'transition3d: 83' => '3D Scaling and spinning cuboids to right (180°, large depth)',
                            'transition3d: 84' => '3D Scaling and spinning cuboids to left (180°, large depth)',
                            'transition3d: 85' => '3D Scaling and spinning cuboids to bottom (180°, large depth)',
                            'transition3d: 86' => '3D Scaling and spinning cuboids to top (180°, large depth)',
                            'transition3d: 87' => '3D Scaling and horizontal spinning cuboids random (180°, large depth)',
                            'transition3d: 88' => '3D Scaling and vertical spinning cuboids random (180°, large depth)',
                            'transition3d: 89' => '3D Scaling and spinning rows to right (180°, large depth)',
                            'transition3d: 90' => '3D Scaling and spinning rows to left (180°, large depth)',
                            'transition3d: 91' => '3D Scaling and spinning rows to bottom (180°, large depth)',
                            'transition3d: 92' => '3D Scaling and spinning rows to top (180°, large depth)',
                            'transition3d: 93' => '3D Scaling and horizontal spinning rows random (180°, large depth)',
                            'transition3d: 94' => '3D Scaling and vertical spinning rows random (180°, large depth)',
                            'transition3d: 95' => '3D Scaling and spinning columns to bottom (180°, large depth)',
                            'transition3d: 96' => '3D Scaling and spinning columns to top (180°, large depth)',
                            'transition3d: 97' => '3D Scaling and spinning columns to right (180°, large depth)',
                            'transition3d: 98' => '3D Scaling and spinning columns to left (180°, large depth)',
                            'transition3d: 99' => '3D Scaling and horizontal spinning columns random (180°, large depth)',
                            'transition3d: 100' => '3D Scaling and vertical spinning columns random (180°, large depth)',
                        )
                    )) ?>
                    <?php echo bsFormDropdown('delay', 'Animasyon Süresi', array(
                        'value' => set_value('delay', '4000'),
                        'options' => array(
                            '1000' => '1 Saniye',
                            '2000' => '2 Saniye',
                            '3000' => '3 Saniye',
                            '4000' => '4 Saniye',
                            '5000' => '5 Saniye',
                            '6000' => '6 Saniye',
                            '7000' => '7 Saniye',
                            '8000' => '8 Saniye',
                            '9000' => '9 Saniye',
                            '10000' => '10 Saniye',
                        )
                    )) ?>

                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <button class="btn btn-success" type="submit" name="redirect" value="<?php echo $this->module ?>/records">Kaydet ve Listeye Dön</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>


</div>