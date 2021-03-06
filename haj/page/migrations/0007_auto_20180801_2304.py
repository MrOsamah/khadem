# Generated by Django 2.0.7 on 2018-08-01 23:04

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('page', '0006_auto_20180801_1806'),
    ]

    operations = [
        migrations.AddField(
            model_name='lost',
            name='Name',
            field=models.CharField(default='', max_length=30),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='medicalservices',
            name='Age',
            field=models.IntegerField(default=0),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='medicalservices',
            name='Gender',
            field=models.CharField(choices=[('M', 'Male'), ('F', 'Female')], default='', max_length=1),
        ),
        migrations.AddField(
            model_name='medicalservices',
            name='Name',
            field=models.CharField(default='', max_length=30),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='medicalservices',
            name='Nationality',
            field=models.CharField(choices=[('SA', 'Saudi'), ('PA', 'Pakistani'), ('IR', 'Iranian')], default='', max_length=2),
        ),
    ]
