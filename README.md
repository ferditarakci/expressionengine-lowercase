# ExpressionEngine 2.x String to Lowercase Plugin


### This function runs mb_strtolower() on a string of ExpressionEngine 2.x Template.
```
The tag pair is simply:
{exp:lowercase}ISPARTA{/exp:lowercase}

Example usage:
ISPARTA

becomes:
isparta
```


#### In order to use the lowercase letter ( ı ) correctly in Turkish words, we need to send the lang="tr" parameter to our club.

```
The tag pair is simply:
{exp:lowercase lang="tr"}ISPARTA{/exp:lowercase}

Example usage:
ISPARTA

becomes:
ısparta
```


### Bu işlem ExpressionEngine 2.x şablonlarında mb_strtolower() yönetimini çalıştırır.

```
Eklenti kullanımı:
{exp:lowercase}ISPARTA{/exp:lowercase}

Örnek Yazı:
ISPARTA

Sonuç:
isparta
```


#### Türkçe kelimelerde küçük ( ı ) harfini doğru şekilde kullanabilmemiz için lang="tr" parametresini ekletimize göndermemiz gerekiyor.

```
Eklenti kullanımı:
{exp:lowercase lang="tr"}ISPARTA{/exp:lowercase}

Örnek Yazı:
ISPARTA

Sonuç:
ısparta
```
