# Generated by Django 2.0.7 on 2018-08-01 15:05

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('page', '0004_remove_medicalservices_photo'),
    ]

    operations = [
        migrations.AddField(
            model_name='medicalservices',
            name='Photo',
            field=models.FileField(default='', upload_to=''),
        ),
    ]
