<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', type: null, options: [
                "label" => "Enter the Event Name",
                "attr" => [ "placeholder" => "Event Name", "class" => "form-control"]
                ] )
            ->add('eventDateTime', null, [
                'widget' => 'single_text',
                'label' => 'Event Date and Time',
                'attr' => ['class' => 'form-control datetimepicker-input']
            ])
            ->add('description', type:null, options: [
                "label" => "Enter the Event Description",
                 "attr" => [ "placeholder" => "Event Description", "class" => "form-control"]
                ])
            ->add('image', type: null, options: [
                "label" => "Image URL",
                "attr" => [ "placeholder" => "Image URL", "class" => "form-control"]
                ])
            ->add('capacity', type:null, options:[
                "label" => "Enter the Event Capacity",
                "attr" => [ "placeholder" => "Event Capacity", "class" => "form-control"]
                ])
            ->add('contact_email', type:null, options: [
                "label" => "Enter the Event Contact Email",
                "attr" => [ "placeholder" => "Event Contact Email", "class" => "form-control"]
                ])
            ->add('contact_phone_number', type:null, options:[
                "label" => "Enter the Event Contact Phone Number",
                "attr" => [ "placeholder" => "Event Contact Phone Number", "class" => "form-control"]
                ])
            ->add('adress', type:null, options: [
                "label" => "Where is the Event located?",
                "attr" => [ "placeholder" => "Enter the adress", "class" => "form-control"]
                ])
            ->add('event_URL', type:null, options:[
                "label" => "Enter the Event URL",
                "attr" => [ "placeholder" => "Event URL", "class" => "form-control"]
                ])
            ->add('eventType', ChoiceType::class, [
                "choices" => [
                    "Music" => "Music",
                    "Sports" => "Sports",
                    "Movie" => "Movie",
                    "Theater" => "Theater",
                    "Food" => "Food",
                    "Art" => "Art",
                    "Other" => "Other"
                ],
                "label" => "Select the Event Type",
                'placeholder' => 'Select the event type',
                "attr" => [ "class" => "form-control"]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
