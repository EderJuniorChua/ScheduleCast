CREATE TABLE `Subject` (
  `code` varchar(255) PRIMARY KEY,
  `pre_requisite` varchar(255),
  `pre_requisite_level` int,
  `units` int
);

CREATE TABLE `Teacher` (
  `id` int PRIMARY KEY,
  `expertise` varchar(255),
  `first_name` varchar(255),
  `last_name` varchar(255)
);

CREATE TABLE `Subjects_Taught` (
  `id` int PRIMARY KEY,
  `teacher_id` int,
  `code` varchar(255),
  `evaluation_performance` float
);

CREATE TABLE `Subjects_Teacher_Wanted` (
  `id` int PRIMARY KEY,
  `teacher_id` int,
  `code` varchar(255),
  `preference` int
);

CREATE TABLE `Student` (
  `id` int PRIMARY KEY,
  `course` varchar(255),
  `first_name` varchar(255),
  `last_name` varchar(255)
);

CREATE TABLE `Course_Subjects` (
  `id` int PRIMARY KEY,
  `course` varchar(255),
  `subject_code` varchar(255)
);

CREATE TABLE `Subjects_Taken` (
  `id` int PRIMARY KEY,
  `student_id` int,
  `code` varchar(255)
);

CREATE TABLE `Subjects_Student_Wanted` (
  `id` int PRIMARY KEY,
  `term` int,
  `student_id` int,
  `code` varchar(255)
);

ALTER TABLE `Subjects_Taught` ADD FOREIGN KEY (`teacher_id`) REFERENCES `Teacher` (`id`);

ALTER TABLE `Subjects_Taught` ADD FOREIGN KEY (`code`) REFERENCES `Subject` (`code`);

ALTER TABLE `Subjects_Teacher_Wanted` ADD FOREIGN KEY (`teacher_id`) REFERENCES `Teacher` (`id`);

ALTER TABLE `Subjects_Teacher_Wanted` ADD FOREIGN KEY (`code`) REFERENCES `Subject` (`code`);

ALTER TABLE `Course_Subjects` ADD FOREIGN KEY (`subject_code`) REFERENCES `Subject` (`code`);

ALTER TABLE `Subjects_Taken` ADD FOREIGN KEY (`student_id`) REFERENCES `Student` (`id`);

ALTER TABLE `Subjects_Taken` ADD FOREIGN KEY (`code`) REFERENCES `Subject` (`code`);

ALTER TABLE `Subjects_Student_Wanted` ADD FOREIGN KEY (`student_id`) REFERENCES `Teacher` (`id`);

ALTER TABLE `Subjects_Student_Wanted` ADD FOREIGN KEY (`code`) REFERENCES `Subject` (`code`);
