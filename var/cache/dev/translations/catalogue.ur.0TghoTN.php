<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ur', array (
  'validators' => 
  array (
    'This value should be false.' => 'یہ ويليو غلط ہونی چاہیے',
    'This value should be true.' => 'یہ ويليو درست ہونی چاہیے',
    'This value should be of type {{ type }}.' => 'قسم کی ہونی چاہیے {{type}} يھ ويليو',
    'This value should be blank.' => 'یہ ويليو خالی ہونی چاہیے',
    'The value you selected is not a valid choice.' => 'آپ نے جو ويليو منتخب کی ہے وہ درست انتخاب نہیں ہے',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'کا انتخاب کرنا چاہیے {{limit}} کا انتخاب کرنا چاہیے ۔آّپ کو کم اذ کم {{limit}} آپ کو کم از کم',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'کا انتخاب کرنا چاہیے {{limit}} کا انتخاب کرنا چاہیے ۔آّپ کو ذيادھ سے ذيادھ {{limit}} آپ کو ذيادھ سے ذيادھ',
    'One or more of the given values is invalid.' => 'دی گئی ويليوذ میں سے ایک یا زیادھ ويليوذ غلط ہیں',
    'This field was not expected.' => 'اس فیلڈ کی توقع نہیں تھی',
    'This field is missing.' => 'یہ فیلڈ غائب ہے',
    'This value is not a valid date.' => 'یہ ويليو درست تاریخ نہیں ہے',
    'This value is not a valid datetime.' => 'یہ ويليو درست تاریخ وقت نہیں ہے',
    'This value is not a valid email address.' => 'یہ ويليو درست ای میل ایڈریس نہیں ہے',
    'The file could not be found.' => 'فائل نہیں مل سکی',
    'The file is not readable.' => 'فائل پڑھنے کے قابل نہیں ہے',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '{{ suffix }} {{ limit }} زیادہ سے زیادہ سائز کی اجازت ہے {{ suffix }}) ({{ size }} فائل بہت بڑی ہے',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ہیں {{ types }} مائیم کی قسمیں ({{ type }}) فائل کی ماۂيم قسم غلط ہے',
    'This value should be {{ limit }} or less.' => 'یا اس سے کم ہونی چاہیے {{ limit }} یہ ويليو',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'حروف یا اس سے کم ہونے چاہئیں {{ limit }} حرف یا اس سے کم ہونا چاہیے۔|یہ ويليو بہت لمبی ہے۔ اس میں{{ limit }} یہ ويليو بہت لمبی ہے۔ اس میں',
    'This value should be {{ limit }} or more.' => 'یا اس سے زیادہ ہونی چاہیے {{ limit }} یہ ويليو',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'حروف یا اس سے زیادہ ہونے چاہئیں {{ limit }} حرف یا اس سے زیادہ ہونا چاہیے۔|یہ ويليو بہت چھوٹی ہے۔ اس میں{{ limit }} یہ ويليو بہت مختصر ہے۔ اس میں',
    'This value should not be blank.' => 'یہ ويليو خالی نہیں ہونی چاہیے',
    'This value should not be null.' => 'یہ ويليو خالی نہیں ہونی چاہیے',
    'This value should be null.' => 'یہ ويليو خالی ہونی چاہیے',
    'This value is not valid.' => 'یہ ويليو درست نہیں ہے',
    'This value is not a valid time.' => 'یہ ويليو درست وقت نہیں ہے',
    'This value is not a valid URL.' => 'نہیں ہے URL یہ ويليو درست',
    'The two values should be equal.' => 'دونوں ويليوذ برابر ہونی چاہئیں',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '{{ suffix }} {{ limit }} فائل بہت بڑی ہے۔ زیادہ سے زیادہ سائز کی اجازت ہے',
    'The file is too large.' => 'فائل بہت بڑی ہے',
    'The file could not be uploaded.' => 'فائل اپ لوڈ نہیں ہو سکی',
    'This value should be a valid number.' => 'یہ ويليو ایک درست نمبر ہونی چاہیے',
    'This file is not a valid image.' => 'یہ فائل درست تصویر نہیں ہے',
    'This is not a valid IP address.' => 'یہ قیمت کوئی درست IP پتہ نہیں ہے۔',
    'This value is not a valid language.' => 'یہ ويليو درست زبان نہیں ہے',
    'This value is not a valid locale.' => 'یہ ويليو درست مقام نہیں ہے',
    'This value is not a valid country.' => 'یہ ويليو ایک درست ملک نہیں ہے',
    'This value is already used.' => 'یہ ويليو پہلے ہی استعمال ہو چکی ہے',
    'The size of the image could not be detected.' => 'تصویر کے سائز کا پتہ نہیں چل سکا',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ہے {{ max_width }}px اجازت دی گئی زیادہ سے زیاد چوڑائی ({{ width }}px) تصویر کی چوڑائی بہت بڑی ہے',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ہے {{ min_width }}px کم از کم چوڑائی متوقع({{ width }}px) تصویر کی چوڑائی بہت چھوٹی ہے',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ہے {{ max_height }}px اجازت دی گئی زیادہ سے زیاد اونچائی ({{ height }}px) تصویر کی اونچائی بہت بڑی ہے',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ہے {{ min_height }}px  متوقع کم از کم اونچائی ({{ height }}px) تصویر کی اونچائی بہت چھوٹی ہے',
    'This value should be the user\'s current password.' => 'یہ ويليو صارف کا موجودہ پاس ورڈ ہونا چاہیے',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'حروف ہونے چاہئیں {{ limit }} حرف ہونا چاہیے۔|اس ويليو میں بالکل {{ limit }} اس ويليو میں بالکل',
    'The file was only partially uploaded.' => 'فائل صرف جزوی طور پر اپ لوڈ کی گئی تھی',
    'No file was uploaded.' => 'کوئی فائل اپ لوڈ نہیں کی گئی',
    'No temporary folder was configured in php.ini.' => 'php.ini میں کوئی عارضی فولڈر ترتیب نہیں دیا گیا تھا، یا ترتیب دیا گیا فولڈر موجود نہیں ہے۔',
    'Cannot write temporary file to disk.' => 'عارضی فائل کو ڈسک پر نہیں لکھا جا سکتا',
    'A PHP extension caused the upload to fail.' => 'پی ایچ پی کی توسیع کی وجہ سے اپ لوڈ ناکام ہو گیا',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'عناصر یا اس سے زیادہ ہونا چاہیے {{ limit }  عنصر یا اس سے زیادہ ہونا چاہیے۔|اس مجموعہ میں {{ limit }} اس مجموعہ میں',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'عناصر یا اس سے کم ہونا چاہیے {{ limit } عنصر یا اس سے کم ہونا چاہیے۔|اس مجموعہ میں {{ limit }} اس مجموعہ میں',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'عنصر ہونا چاہیے {{ limit }}  عنصر ہونا چاہیے۔|اس مجموعے میں بالکل {{ limit }} اس مجموعہ میں بالکل',
    'Invalid card number.' => 'غلط کارڈ نمبر',
    'Unsupported card type or invalid card number.' => 'غیر تعاون یافتہ کارڈ کی قسم یا غلط کارڈ نمبر',
    'This is not a valid International Bank Account Number (IBAN).' => 'یہ قیمت کوئی درست بین الاقوامی بینک اکاؤنٹ نمبر (IBAN) نہیں ہے۔',
    'This value is not a valid ISBN-10.' => 'نہیں ہے ISBN-10 یھ ويليو درست۔',
    'This value is not a valid ISBN-13.' => 'نہیں ہے ISBN-13 یھ ويليو درست۔',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ISBN-13 ے اور نہ ہی درست ISBN-10 یہ ويليو نہ تو درست',
    'This value is not a valid ISSN.' => 'نہیں ہے ISSNیھ ويليو درست۔',
    'This value is not a valid currency.' => 'یہ ويليو درست کرنسی نہیں ہے',
    'This value should be equal to {{ compared_value }}.' => 'کے برابر ہونا چاہیے {{ compared_value }} یھ ويليو',
    'This value should be greater than {{ compared_value }}.' => 'سے بڈي ہوني چاہیے {{ compared_value }} یھ ويليو',
    'This value should be greater than or equal to {{ compared_value }}.' => 'سے بڈي یا برابر ہوني چاہیے {{ compared_value }} یھ ويليو',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value }} {{ compared_value_type }} یہ ويليو ایک جیسی ہونی چاہیے۔',
    'This value should be less than {{ compared_value }}.' => 'سے کم ہوني چاہیے {{ compared_value }} یھ ويليو',
    'This value should be less than or equal to {{ compared_value }}.' => 'سے کم یا برابر ہوني چاہیے {{ compared_value }} یھ ويليو',
    'This value should not be equal to {{ compared_value }}.' => 'کے برابر نھيں ہوني چاہیے {{ compared_value }} یھ ويليو',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ایک جیسی نیيں ہونی چاہیے {{ compared_value }} {{ compared_value_type }} یہ ويليو',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ہے {{ max_ratio }} اجازت شدہ زیادہ سے زیادہ تناسب ({{ ratio }}) تصویر کا تناسب بہت بڑا ہے',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ہے{{ min_ratio }} ratio متوقع کم از کم ({{ ratio }}) بہت چھوٹا ہے ratio تصویر کا',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'مربع تصاویر کی اجازت نہیں ہے (px{{ height }}x{{ width }})  تصویر مربع ہے',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'زمین کی تزئین پر مبنی تصاویر کی اجازت نہیں ہے ({{ width }}x{{ height }}px) تصویر زمین کی تزئین پر مبنی ہے',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'پورٹریٹ پر مبنی تصاویر کی اجازت نہیں ہے ({{ width }}x{{ height }}px) تصویر پورٹریٹ پر مبنی ہے',
    'An empty file is not allowed.' => 'خالی فائل کی اجازت نہیں ہے',
    'The host could not be resolved.' => 'میزبان حل نہیں ہو سکا',
    'This value does not match the expected {{ charset }} charset.' => 'کے جيسي نہیں ہے charset {{ charset }} یہ ويليو متوقع',
    'This is not a valid Business Identifier Code (BIC).' => 'یہ قیمت کوئی درست بزنس شناختی کوڈ (BIC) نہیں ہے۔',
    'Error' => 'خرابی',
    'This is not a valid UUID.' => 'یہ قیمت کوئی درست UUID نہیں ہے۔',
    'This value should be a multiple of {{ compared_value }}.' => 'کا ضرب ہوني چاہیے {{ compared_value }} یہ ويليو ',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'سے وابستہ نہیں ہے IBAN {{ iban }} (BIC) یہ کاروباری شناختی کوڈ',
    'This value should be valid JSON.' => 'ہونی چاہیے JSON یہ ويليو درست',
    'This collection should contain only unique elements.' => 'یہ مجموعہ صرف منفرد عناصر پر مشتمل ہونا چاہیے',
    'This value should be positive.' => 'یہ ويليو مثبت ہونی چاہیے',
    'This value should be either positive or zero.' => 'یہ ويليو یا تو مثبت یا صفر ہونی چاہیے',
    'This value should be negative.' => 'یہ ويليو منفی ہونی چاہیے',
    'This value should be either negative or zero.' => 'یہ ويليو یا تو منفی یا صفر ہونی چاہیے',
    'This value is not a valid timezone.' => 'یہ ويليو درست ٹائم زون نہیں ہے',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'یہ پاس ورڈ ڈیٹا کی خلاف ورزی میں لیک ہو گیا ہے، اسے استعمال نہیں کرنا چاہیے۔ براۓ کرم دوسرا پاس ورڈ استعمال کریں',
    'This value should be between {{ min }} and {{ max }}.' => 'کے درمیان ہونی چاہیے {{ max }} اور {{ min }} یہ ويليو',
    'This value is not a valid hostname.' => 'نہیں ہے hostname یہ ويليو درست',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'کی ضرب ہونی چاہیے {{ compared_value }} اس مجموعہ میں عناصر کی تعداد',
    'This value should satisfy at least one of the following constraints:' => 'اس ويليو کو درج ذیل رکاوٹوں میں سے کم از کم ایک کو پورا کرنا چاہیے',
    'Each element of this collection should satisfy its own set of constraints.' => 'اس مجموعے کے ہر عنصر کو اپنی پابندیوں کے سیٹ کو پورا کرنا چاہیے',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'نہیں ہے (ISIN) یہ ويليو درست بین الاقوامی سیکیورٹیز شناختی نمبر',
    'This value should be a valid expression.' => 'یہ ويليو ایک درست اظہار ہوني چاہیے',
    'This value is not a valid CSS color.' => 'رنگ نہیں ہے CSS یہ ويليو درست',
    'This value is not a valid CIDR notation.' => 'نوٹیشن نہیں ہے CIDR یہ ويليو ایک درست',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'کے درمیان ہونی چاہیے {{ max }} اور {{ min }} نیٹ ماسک کی ويليو',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'فائل کا نام بہت لمبا ہے۔ اس میں {{ filename_max_length }} حرف یا اس سے کم ہونے چاہئیں۔|فائل کا نام بہت لمبا ہے۔ اس میں {{ filename_max_length }} حروف یا اس سے کم ہونے چاہئیں۔',
    'The password strength is too low. Please use a stronger password.' => 'پاس ورڈ کی طاقت بہت کم ہے۔ براہ کرم مضبوط پاس ورڈ استعمال کریں۔',
    'This value contains characters that are not allowed by the current restriction-level.' => 'اس قدر میں ایسے حروف موجود ہیں جو موجودہ پابندی کی سطح کی طرف سے اجازت نہیں ہیں۔',
    'Using invisible characters is not allowed.' => 'نادیدہ حروف استعمال کرنے کی اجازت نہیں ہے۔',
    'Mixing numbers from different scripts is not allowed.' => 'مختلف اسکرپٹس سے نمبروں کو ملا کر استعمال کرنے کی اجازت نہیں ہے۔',
    'Using hidden overlay characters is not allowed.' => 'چھپے ہوئے اوورلے کریکٹرز کا استعمال کرنے کی اجازت نہیں ہے۔',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'فائل کی توسیع نامناسب ہے ({{ extension }})۔ اجازت شدہ توسیعات {{ extensions }} ہیں۔',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'پتہ چلنے والی کریکٹر انکوڈنگ نامناسب ہے ({{ detected }})۔ اجازت شدہ انکوڈنگز {{ encodings }} ہیں۔',
    'This value is not a valid MAC address.' => 'یہ قیمت کوئی درست MAC پتہ نہیں ہے۔',
    'This form should not contain extra fields.' => 'اس فارم میں اضافی فیلڈز نہیں ہونی چاہئیں',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'اپ لوڈ کردھ فائل بہت بڑی تھی۔ براہ کرم ایک چھوٹی فائل اپ لوڈ کرنے کی کوشش کریں',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'ٹوکن غلط ہے۔ براۓ کرم فارم کو دوبارہ جمع کرانے کی کوشش کریں CSRF',
    'This value is not a valid HTML5 color.' => 'ر نگ نھیں ھےHTML یھ ولیو در ست',
    'Please enter a valid birthdate.' => 'براۓ کرم درست تاریخ پیدائش درج کریں',
    'The selected choice is invalid.' => 'منتخب کردہ انتخاب غلط ہے',
    'The collection is invalid.' => 'یھ مجموعہ غلط ہے',
    'Please select a valid color.' => 'براۓ کرم ایک درست رنگ منتخب کریں',
    'Please select a valid country.' => 'براۓ کرم ایک درست ملک منتخب کریں',
    'Please select a valid currency.' => 'براۓ کرم ایک درست کرنسی منتخب کریں',
    'Please choose a valid date interval.' => 'براۓ کرم ایک درست تاریخی وقفھہ منتخب کریں',
    'Please enter a valid date and time.' => 'براۓ کرم ایک درست تاریخ اور وقت درج کریں',
    'Please enter a valid date.' => 'براۓ کرم ایک درست تاریخ درج کریں',
    'Please select a valid file.' => 'براۓ کرم ایک درست فائل منتخب کریں',
    'The hidden field is invalid.' => 'پوشیدھہ فیلڈ غلط ہے',
    'Please enter an integer.' => 'براۓ کرم ایک عدد درج کریں',
    'Please select a valid language.' => 'براۓ کرم ایک درست زبان منتخب کریں',
    'Please select a valid locale.' => 'براۓ کرم ایک درست مقام منتخب کریں',
    'Please enter a valid money amount.' => 'براۓ کرم ایک درست رقم درج کریں',
    'Please enter a number.' => 'براۓ کرم ایک نمبر درج کریں',
    'The password is invalid.' => 'پاس ورڈ غلط ہے',
    'Please enter a percentage value.' => 'براہ کرم فیصد کی ويلو درج کریں',
    'The values do not match.' => 'ويليوذ ٹھيک نہیں ہیں',
    'Please enter a valid time.' => 'براۓ کرم ایک درست وقت درج کریں',
    'Please select a valid timezone.' => 'براۓ کرم ایک درست ٹائم زون منتخب کریں',
    'Please enter a valid URL.' => 'براۓ کرم ایک درست ادريس درج کریں',
    'Please enter a valid search term.' => 'براۓ کرم ایک درست ويلو تلاش کيلۓ درج کریں',
    'Please provide a valid phone number.' => 'براۓ کرم ایک درست فون نمبر فراہم کریں',
    'The checkbox has an invalid value.' => 'چیک باکس میں ایک غلط ويلو ہے',
    'Please enter a valid email address.' => 'براۓ مہربانی قابل قبول ای میل ایڈریس لکھیں',
    'Please select a valid option.' => 'براۓ کرم ایک درست آپشن منتخب کریں',
    'Please select a valid range.' => 'براۓ کرم ایک درست رینج منتخب کریں',
    'Please enter a valid week.' => 'براۓ کرم ایک درست ہفتہ درج کریں',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'ایک تصدیقي خرابی پیش آگئی ۓ',
    'Authentication credentials could not be found.' => 'درج کردھ ریکارڈ نہیں مل سکا',
    'Authentication request could not be processed due to a system problem.' => 'سسٹم کی خرابی کی وجہ سے تصدیق کی درخواست پر کارروائی نہیں ہو سکی',
    'Invalid credentials.' => 'غلط ڈیٹا',
    'Cookie has already been used by someone else.' => 'کوکی پہلے ہی کسی اور کے ذریعہ استعمال ہو چکی ہے',
    'Not privileged to request the resource.' => 'وسائل کی درخواست کرنے کا اختیار نہیں ہے',
    'Invalid CSRF token.' => 'ٹوکن غلط ہے CSRF',
    'No authentication provider found to support the authentication token.' => 'تصدیقی ٹوکن کو سپورٹ کرنے کے لیے کوئی تصدیقی کنندہ نہیں ملا',
    'No session available, it either timed out or cookies are not enabled.' => 'کوئی سیشن دستیاب نہیں ہے، یا تو اس کا وقت ختم ہو گیا ہے یا کوکیز فعال نہیں ہیں',
    'No token could be found.' => 'کوئی ٹوکن نہیں مل سکا',
    'Username could not be found.' => 'يوذر نہیں مل سکا',
    'Account has expired.' => 'اکاؤنٹ کی میعاد ختم ہو گئی ہے',
    'Credentials have expired.' => 'اسناد کی میعاد ختم ہو چکی ہے',
    'Account is disabled.' => 'اکاؤنٹ بند کر دیا گیا ہے',
    'Account is locked.' => 'اکاؤنٹ لاک ہے',
    'Too many failed login attempts, please try again later.' => 'لاگ ان کی بہت زیادہ ناکام کوششیں ہو چکی ہیں، براۓ کرم بعد میں دوبارہ کوشش کریں',
    'Invalid or expired login link.' => 'غلط یا ختم شدھ لاگ ان لنک',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'منٹ باد %minutes% لاگ ان کی بہت زیادہ ناکام کوششیں ہو چکی ہیں، براۓ کرم دوبارھ کوشيش کريں ',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'The link to verify your email has expired. Please request a new link.',
    'The link to verify your email is invalid. Please request a new link.' => 'The link to verify your email is invalid. Please request a new link.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'The link to verify your email appears to be for a different account or email. Please request a new link.',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'There was a problem validating your password reset request',
    'There was a problem handling your password reset request' => 'There was a problem handling your password reset request',
    'The link in your email is expired. Please try to reset your password again.' => 'The link in your email is expired. Please try to reset your password again.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.',
    'The reset password link is invalid. Please try to reset your password again.' => 'The reset password link is invalid. Please try to reset your password again.',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'You have already requested a reset password email. Please check your email or try again soon.',
  ),
  'victorprdh_recaptcha' => 
  array (
    'verify.captcha' => 'Please verify the captcha',
    'invalid.captcha' => 'Captcha invalid, please try again',
    'timeout.captcha' => 'The captcha is no longer valid, please try again',
    'missinginput.captcha' => 'Empty secrect key',
    'invalidinput.captcha' => 'Invalid secret key',
    'hostname.captcha' => 'Hostname mismatch',
    'badrequest.captcha' => 'The request could not be completed',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
