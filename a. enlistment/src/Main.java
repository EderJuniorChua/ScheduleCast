import java.util.Arrays;
import java.util.Collections;
import java.util.HashMap;
import java.util.HashSet;

public class Main {
//    Pseudo algorithm for optimal subject allocation
//      0. Allocate all free subjects that aren't been taken by the student (not taken student_subjects)
//
//      1. Students voting for subjects create a list of wanted subjects (each student up to max_subjects)
//
//      2. Subjects are queue based on priority which inferred from both subject pre requisite (1 + 0.5 pts per pre requisite)
//      multiplied by sum of student vote (1 + 0.5 pts per year level)
//
//      3. Let teachers vote for their preferred subject and queue them based on preference
//      (1 if 3 star, -0.25 per decrease, +0.5 per increase in star)
//      * last 2 terms performance on that subject (4 pt grade /2 ie 3 grade is 1.5 pts) (if no grade, 1 is default)

//      4. Go on each element in subject queue and assign teachers based on teachers priority queue then assign the rest
// 	to available teachers
//      *Teachers queue iterates to all subject per run so every teacher get to pick a subject per each run

    public static void main(String[] args) {
        HashMap<String, HashSet<String>> Course_Subjects = new HashMap<>();
        HashSet<String> BSCS_Subjects = new HashSet<>();
        Collections.addAll(BSCS_Subjects, "Computer Programming 1",
                "Introduction to Computing",
                "Self Development and Goal Setting",
                "Physical Education 1",
                "Programming Languages",
                "Mathematics in the Modern World",
                "Civic Welfare 1",
                "Web Design (html css)",
                "Relational Database Management Systems",
                "Physical Education 2",
                "Civic Welfare 2",
                "Computer Programming 2",
                "Human Computer Interaction",
                "Physical Education 3",
                "Data Structure and Algorithm",
                "Web Design and Scripting (JS/JQUERY)",
                "Object Oriented Programming",
                "Pre-Calculus for non-STEM",
                "Discrete Mathematics 1",
                "Introduction to Calculus",
                "Advance programming",
                "Physical Education 4",
                "Information Management",
                "Discrete Mathematics 2",
                "Architecture and Organization",
                "Operating System",
                "Intro to Game Development",
                "Panitikan",
                "Understanding the Self",
                "Web Programming",
                "Algorithms and Complexity",
                "Information Assurance Security",
                "Applications Development and Emerging Technologies",
                "Readings in Philippine History",
                "Game Design and development",
                "Science Technology and Society",
                "Networks and Communications",
                "Retorika",
                "Technopreneurship",
                "Purposive Communication",
                "Software Engineering 1",
                "Game Programming 2",
                "Advance Android App Development (Kotlin)",
                "Art Appreciation",
                "Automata Theory and Formal Language",
                "Social Issues and Professional Practice",
                "Methods of Research",
                "CS ELECTIVE 1(Dynamic Web Programming (J2EE/Rest API)",
                "Software Engineering 2",
                "Modeling and Rigging",
                "Life and Works of Rizal",
                "CS ELECTIVE 2(Game Asset Optimization)",
                "Contemporary World",
                "CS Thesis Writing 1",
                "Advance Game Design and Production",
                "IOS APP Development",
                "Ethics",
                "CS ELECTIVE 3(Hybrid Programming (React/Ruby on rails)",
                "Job Skills and Career Preparation",
                "Accounting for IT",
                "CS Thesis Writing 2",
                "Principles of System Thinking",
                "Practicum 1",
                "Practicum 2");
    }

}
