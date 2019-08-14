<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class DeathQuizzType
 *
 * @package App\Form
 */
class DeathQuizzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
         * var questions = [
        {
            question: "Fumez-vous, mâchez-vous du tabac ou êtes vous entouré(e) de fumeurs ?",
            reponses: { "Oui": -20, "Non": 0 }
        },
        {
            question: "Aimez-vous le poisson ou la viande très cuite ?",
            reponses: { "Oui": -2, "Non": 0 }
        },
        {
            question: "Évitez-vous le beurre, la crème, les pâtisseries et les autres produits riches en graisses saturées, de même que les aliments frits (par ex. les frites) ?",
            reponses: { "Oui": 3, "Non": -7 }
        },
        {
            question: "Consommez-vous peu de viande et beaucoup de fruits, légumes et son ?",
            reponses: { "Oui": 5, "Non": -4 }
        },
        {
            question: "Buvez-vous plus de quatre verres de vin ou trois canettes de bière par jour ?",
            reponses: { "Oui": -6, "Non": 0 }
        },
        {
            question: "Êtes-vous un(e) consommateur(trice) modéré(e) d'alcool (un à trois verres de vin par jour) ?",
            reponses: { "Oui": 3, "Non": 0 }
        },
        {
            question: "Subissez-vous dans votre environnement quotidien des pics de pollution ?",
            reponses: { "Oui": -4, "Non": 1 }
        },
        {
            question: "Buvez-vous plus de trois tasses de café par jour ?",
            reponses: { "Oui": -3, "Non": 0 }
        },
        {
            question: "Buvez-vous, à la place, du thé quotidiennement ?",
            reponses: { "Oui": 3, "Non": 0 }
        },
        {
            question: "Prenez-vous de l'aspirine tous les jours ?",
            reponses: { "Oui": 4, "Non": 0 }
        },
        {
            question: "Pratiquez-vous une bonne hygiène dentaire (brossage deux-trois fois par jour, fil dentaire quotidien) ?",
            reponses: { "Oui": 2, "Non": -4 }
        },
        {
            question: "Allez-vous à la selle au moins une fois tous les deux jours ?",
            reponses: { "Oui": 0, "Non": -4 }
        },
        {
            question: "Avez-vous été victime d'un accident vasculaire cérébral ou d'une attaque cardiaque ?",
            reponses: { "Oui": -4, "Non": 0 }
        },
        {
            question: "Vous exposez-vous souvent au soleil sans protection ?",
            reponses: { "Oui": -4, "Non": 3 }
        },
        {
            question: "Présentez-vous une surcharge pondérale supérieure ou égale à 10 kg ?",
            reponses: { "Oui": -10, "Non": 0 }
        },
        {
            question: "Habitez-vous à proximité d'un membre de la famille qui ne soit ni votre conjoint(e), ni votre enfant à charge, que vous pouvez visiter facilement ?",
            reponses: { "Oui": 5, "Non": -4 }
        },
        {
            question: "À laquelle de ces deux affirmations vous identifiez-vous ?<br/>a) Je suis rongé(e) par le stress, et je ne peux m'en défaire.<br/>b) Je peux gérer mon stress à l'aide de l'exercice physique, de la relaxation, la méditation, la prière, l'humour...",
            reponses: { "Oui (a)": -7, "Oui (b)": 7 }
        },
        {
            question: "Est-ce qu'un des membres de votre famille proche (parents, fratrie) est diabétique ?",
            reponses: { "Oui": -4, "Non": 0 }
        },
        {
            question: "Vos deux parents sont-ils décédés de manière non-accidentelle où étaient-ils dépendants avant 75 ans ?",
            reponses: { "Oui": -10, "Non": 0 }
        },
        {
            question: "Est-ce qu'au moins deux de vos ascendants proches (grands-parents, parents, oncles, tantes) ont vécu jusqu'à l'âge de 90 ans en bonne santé ?",
            reponses: { "Oui": 24, "Non": 0 }
        },
        {
            question: "Faites-vous de l'exercice au moins trois fois par semaine ?",
            reponses: { "Oui": 7, "Non": 0 }
        },
        {
            question: "Etes-vous plutôt sédentaire ?",
            reponses: { "Oui": -7, "Non": 0 }
        },
        {
            question: "Prenez-vous de la vitamine E (400 à 800 UI) ou du sélénium (100 à 200 microgrammes) chaque jour ?",
            reponses: { "Oui": 5, "Non": -3 }


         var total = 0;

        $radios.each(function(i, element) {
            total += Number.parseInt($(element).val());
        });

        total = Math.round(total / 5);

        var base = $('#questionnaire [name="genre"]:checked').val() == 'femme' ? 86 : 80;

        total += base;
         */

        $builder
            ->add('gender', ChoiceType::class, ['label'   => 'Quel est votre sexe ?',
                                                'choices' => ['Homme' => 'm',
                                                              'Femme' => 'f']])
            ->add('birthDate', DateType::class)
            ->add('question_1', ChoiceType::class, ['label'   => 'Fumez-vous ou êtes vous entouré(e) de fumeurs ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_2', ChoiceType::class, ['label'   => 'Aimez-vous le poisson ou la viande très cuite ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_3', ChoiceType::class, ['label'   => 'Évitez-vous le beurre, la crème, les pâtisseries et les autres produits riches en graisses saturées, de même que les aliments frits (par ex. les frites) ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_4', ChoiceType::class, ['label'   => 'Consommez-vous peu de viande et beaucoup de fruits, légumes et oléagineux ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_5', ChoiceType::class, ['label'   => 'Buvez-vous plus de 4 verres de vin ou 3 canettes de bière par jour ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_6', ChoiceType::class, ['label'   => 'Êtes-vous un(e) consommateur(trice) modéré(e) d\'alcool (1 à 3 verres de vin par jour) ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_7', ChoiceType::class, ['label'   => 'Considérez vous que vous habitez dans une grande ville ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_8', ChoiceType::class, ['label'   => 'Buvez-vous plus de trois tasses de café par jour ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_9', ChoiceType::class, ['label'   => 'Avez-vous une bonne hygiène dentaire ?',
                                                    'choices' => ['Oui' => true,
                                                                  'Non' => false]])
            ->add('question_10', ChoiceType::class, ['label'   => 'Allez-vous à la selle au moins une fois tous les deux jours ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_11', ChoiceType::class, ['label'   => 'Avez-vous été victime d\'un accident vasculaire cérébral ou d\'une attaque cardiaque ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_12', ChoiceType::class, ['label'   => 'Vous exposez-vous souvent au soleil sans protection ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_13', ChoiceType::class, ['label'   => 'Présentez-vous une surcharge pondérale supérieure ou égale à 10 kg ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_14', ChoiceType::class, ['label'   => 'Habitez-vous à proximité d\'un membre de la famille qui ne soit ni votre conjoint(e), ni votre enfant à charge, que vous pouvez visiter facilement ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_15', ChoiceType::class, ['label'   => 'À laquelle de ces deux affirmations vous identifiez-vous ?',
                                                     'choices' => ['a' => 'Je suis rongé(e) par le stress, et je ne peux m\'en défaire.',
                                                                   'b' => 'Je peux gérer mon stress']])
            ->add('question8_16', ChoiceType::class, ['label'   => 'Est-ce qu\'un des membres de votre famille proche (parents, fratrie) est diabétique ?',
                                                      'choices' => ['Oui' => true,
                                                                    'Non' => false]])
            ->add('question_17', ChoiceType::class, ['label'   => 'Vos deux parents sont-ils décédés de manière non-accidentelle où étaient-ils dépendants avant 75 ans ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_18', ChoiceType::class, ['label'   => 'Est-ce qu\'au moins deux de vos ascendants proches (grands-parents, parents, oncles, tantes) ont vécu jusqu\'à l\'âge de 90 ans en bonne santé ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_19', ChoiceType::class, ['label'   => 'Faites-vous de l\'exercice au moins trois fois par semaine ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('question_20', ChoiceType::class, ['label'   => 'Etes-vous plutôt sédentaire ?',
                                                     'choices' => ['Oui' => true,
                                                                   'Non' => false]])
            ->add('save', SubmitType::class);
    }
}