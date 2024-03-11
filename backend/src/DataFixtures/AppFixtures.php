<?php

namespace App\DataFixtures;

use App\Entity\Answers;
use App\Entity\Questions;
use App\Entity\Topics;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $math = new Topics();
        $math->setValue("math");
        $manager->persist($math);

        $chemistry = new Topics();
        $chemistry->setValue("chimie");
        $manager->persist($chemistry);

        $firstQuestion = new Questions();
        $firstQuestion
            ->setTopic($chemistry)
            ->setValue("Ou etait le gondor lorsque nos ennemis nous ont encercler ?")
            ->setCorrection("Au gondor");
        $manager->persist($firstQuestion);

        $answerOneFirstQuestion = new Answers();
        $answerOneFirstQuestion
            ->setQuestion($firstQuestion)
            ->setValue("Au Gondor")
            ->setIsCorrect(true);
        $manager->persist($answerOneFirstQuestion);
        
        $answerTwoFirstQuestion = new Answers();
        $answerTwoFirstQuestion
            ->setQuestion($firstQuestion)
            ->setValue("Au Pakistan")
            ->setIsCorrect(false);
        $manager->persist($answerTwoFirstQuestion);

        $answerThreeFirstQuestion = new Answers();
        $answerThreeFirstQuestion
            ->setQuestion($firstQuestion)
            ->setValue("En Valinor")
            ->setIsCorrect(false);
        $manager->persist($answerThreeFirstQuestion);

        $answerFourthFirstQuestion = new Answers();
        $answerFourthFirstQuestion
            ->setQuestion($firstQuestion)
            ->setValue("OSEF Benoit St Denis s'est fait éteindre, je suis dégoûté, mais l'autre était trop puissant")
            ->setIsCorrect(false);
        $manager->persist($answerFourthFirstQuestion);

        $secondQuestion = new Questions();
        $secondQuestion
            ->setTopic($math)
            ->setValue("Quel sont les numeros de Zizou ?")
            ->setCorrection("10 en équipe de France && 5 au Real Madrid");
        $manager->persist($secondQuestion);

        $answerOneSecondQuestion = new Answers();
        $answerOneSecondQuestion
            ->setQuestion($secondQuestion)
            ->setValue("10 en équipe de France")
            ->setIsCorrect(true);
        $manager->persist($answerOneSecondQuestion);

        $answerTwoSecondQuestion = new Answers();
        $answerTwoSecondQuestion
            ->setQuestion($secondQuestion)
            ->setValue("5 au Real Madrid")
            ->setIsCorrect(true);
        $manager->persist($answerTwoSecondQuestion);

        $answerThirdSecondQuestion = new Answers();
        $answerThirdSecondQuestion
            ->setQuestion($secondQuestion)
            ->setValue("25")
            ->setIsCorrect(false);
        $manager->persist($answerThirdSecondQuestion);

        $answerFourthSecondQuestion = new Answers();
        $answerFourthSecondQuestion
            ->setQuestion($secondQuestion)
            ->setValue("12")
            ->setIsCorrect(false);
        $manager->persist($answerFourthSecondQuestion);

        $manager->flush();
    }
}
