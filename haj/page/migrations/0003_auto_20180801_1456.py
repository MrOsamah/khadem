# Generated by Django 2.0.7 on 2018-08-01 14:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('page', '0002_auto_20180801_1454'),
    ]

    operations = [
        migrations.AlterField(
            model_name='medicalservices',
            name='Photo',
            field=models.FileField(default='', upload_to=''),
        ),
    ]