public class SentenceReverser {
    public static String reverseWords(String sentence) {
        String[] words = sentence.split(" ");
        StringBuilder reversed = new StringBuilder();

        reversed.append(words[2]); 
        reversed.append(" ");
        reversed.append(words[0]); 
        reversed.append(" ");
        reversed.append(words[1]); 

        return reversed.toString();
    }

    public static void main(String[] args) {
        String original = "SYSTEMS INDONESIA AERO";
        String reversed = reverseWords(original);
        System.out.println(reversed);
    }
}