# Üniversite Kitap Paylaşım Platformu

Bu modülde kullanıcılar giriş yaptığı taktirde arayüzdeki tablo üzerinden kitap ekleyip düzenleyebilir.<br>
# Modülün Amacı
- Üniversite öğrencilerinin dönem sonunda ihtiyaç dışı ders kitaplarını birbirleriyle paylayşıp, yardımlaşmaları üzerine kurulmuştur. :school: <br>
- Tablo üzerinde yapılan tüm işlemler veri tabanında tutulur.<br>
- Dinamik olarak veri eklenebilir veya silinebilir.<br>
![Ekran görüntüsü 2021-01-16 194017](https://user-images.githubusercontent.com/56557278/104817501-b4365200-5832-11eb-864d-b6c8c2254329.png)

## Kurulum

- vagrantlasörü içinde vagrant-up yapılarak vagrant çalıştırılmalı.<br>

- Vagrant çalıştırıldıktan sonra vagrant ssh ile sanal makinaya bağlanıp cd/var/www/advanced komutu çalıştırılıp composer update edilmeli.Daha sonra migration işlemleri için

- php yii migrate -- migrationPath=@vendor/iremcelikkanat/190202124/src/Migrations <br>

- komutu yazılarak migration işlemi gerçekleştirilmeli.Bu işlemlerin ardından modül kurulumunu tamamlanmış olur.<br>
 
## Migrations

Modul içerisindeki migration dosyasında 2 adet tablo oluşturulmuştur. Tablolar arasında foreign keyler ile ilişkiler kurulmuştur. table ve student adında 2 adet tablo bulunmaktadır.table tablosunda ki userid ile student tablosunda ki userid ilişkilendirilmiştir.Tablolar resimdeki gibidir.<br>
![tablo](https://user-images.githubusercontent.com/56557278/104817046-daa6be00-582f-11eb-9cb9-26b1e24f8e3d.PNG)

## Modülün Yapısı Ve Kullanımı

![pic1](https://user-images.githubusercontent.com/56557278/104817145-7801f200-5830-11eb-87e0-ac195c451de4.png)

Modul backend altında kullanıcıya kitap ekleme imkanı sağlamaktadır. <br>

![pic1](https://user-images.githubusercontent.com/56557278/104817145-7801f200-5830-11eb-87e0-ac195c451de4.png)

Eklenilen veriler silinir veya güncellenebilir.<br>

![pic2](https://user-images.githubusercontent.com/56557278/104817354-d4b1dc80-5831-11eb-9d4c-9d23b8d33bed.png)

Son olarak girilen tüm öğrenci adları,kitap adları asagıdakı tabloda tutulmaktadır.<br>

![pic3](https://user-images.githubusercontent.com/56557278/104817419-3ffbae80-5832-11eb-96eb-beeaa1b22ed4.png)

## Modul Bağlantısı
- http://advanced/backend/web/index.php?r=student%2Fcreate
